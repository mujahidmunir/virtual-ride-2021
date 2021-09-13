const {WAConnection, ReconnectMode} = require('@adiwajshing/baileys')
const fs = require("fs");
const http = require("http");
const https = require("https");
const express = require('express');
const app = express();
const server = http.createServer(app);
const {body} = require('express-validator');
const wapi = require("./lib/wapi");
const myiolib = require('./lib/myio');
const conn = new WAConnection();
const port = 3000;
const myio = new myiolib(conn, server);
const {validationResult} = require('express-validator');
const {phoneNumberFormatter} = require('./lib/formatter');
const {MessageType} = require('@adiwajshing/baileys')

app.use(express.json());
app.use(express.urlencoded({extended: true}));

conn.autoReconnect = ReconnectMode.onConnectionLost;

conn.on('close', ({reason}) => {
    console.log('CONNECTION CLOSED');
    if (reason === 'invalid_session' || reason === 'replaced') {
        if (fs.existsSync("./session.json")) {
            conn.close()
            conn.clearAuthInfo();
            if (reason === 'invalid_session') {
                fs.unlinkSync("./session.json");
            }
            myio.connect().catch((err) => {
                console.log(err);
            });
        }
    }
});

conn.on('ws-close', ({reason}) => {
    console.log('WS');
    console.log(reason);
});


myio.run();
myio.connect().catch((err) => {
    console.log(err);
});


server.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});

//API
app.post('/api/send-message', [
    body('number').notEmpty(),
    body('message').notEmpty(),
], async (req, res) => {
    await wapi.sendMsg(req, res, conn)
});