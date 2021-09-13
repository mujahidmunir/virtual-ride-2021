const qrcode = require('qrcode');
const SocketIO = require('socket.io')
const fs = require("fs");

class MyIO {
    constructor(conn, server) {
        this.conn = conn;
        this.server = server;
        this.io = SocketIO(this.server, {
            cors: {
                origin: '*',
            }
        });
    }


    async connect() {
        fs.existsSync('./session.json') && this.conn.loadAuthInfo('./session.json');
        await this.conn.connect({timeoutMs: 30 * 1000});
        const authInfo = this.conn.base64EncodedAuthInfo(); // get all the auth info we need to restore this session
        fs.writeFileSync('./session.json', JSON.stringify(authInfo, null, '\t'));
        console.log("oh hello " + this.conn.user.name + " (" + this.conn.user.jid + ")");
        this.io.emit('authenticated', "Tersambung dengan " + this.conn.user.name + " (" + this.conn.user.jid + ")")
    }

    run() {
        const conn = this.conn;
        const io = this.io;
        const self = this;
        io.on("connection", function (socket) {

            socket.on('ready', () => {
                if (fs.existsSync('./session.json') && conn.state == 'open') {
                    console.log("tersambung")
                    io.emit('authenticated', "Tersambung dengan " + conn.user.name + " (" + conn.user.jid + ")")
                    io.emit('message', '')
                } else {
                    io.emit('loader', '')
                    socket.emit('message', 'Please wait..')

                    self.connect().catch((err) => {
                        console.log(err);
                    });
                }
            });

            conn.on("qr", (qr) => {
                socket.emit('message', 'Getting QR Code')
                qrcode.toDataURL(qr, (err, url) => {
                    socket.emit('message', 'QR Code received, scan please!')
                    socket.emit("qr", url);
                });
            });

            socket.on('logout', () => {
                if (fs.existsSync("./session.json")) {
                    conn.close()
                    conn.clearAuthInfo();
                    fs.unlinkSync("./session.json");
                    socket.emit('isdelete', '<h2 class="text-center text-info mt-4">Logout Success, Lets Scan Again<h2>')
                } else {
                    socket.emit('isdelete', '<h2 class="text-center text-danger mt-4">You are have not Login yet!<h2>')
                }
            });

            socket.on('scanqr', () => {
                if (fs.existsSync('./session.json') && conn.state == 'open') {
                    io.emit('authenticated', "oh hello " + conn.user.name + " (" + conn.user.jid + ")")
                } else {
                    io.emit('loader', '')
                    socket.emit('message', 'Please wait..')
                }
                self.connect().catch((err) => {
                    console.log(err);
                });
            });

            socket.on('cekstatus', () => {
                if (fs.existsSync('./session.json') && conn.state == 'open') {
                    io.emit('isdelete', '<h2 class="text-center text-primary mt-4">Your whatsapp is Running!</h2>')
                } else {
                    io.emit('isdelete', '<h2 class="text-center text-danger mt-4">Your whatsapp is not Running!,Scan Now!<h2>')
                }
            })
        });

    }
}

module.exports = MyIO;
