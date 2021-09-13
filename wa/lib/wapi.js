const { validationResult } = require('express-validator');
const {MessageType} = require('@adiwajshing/baileys')
const { phoneNumberFormatter } = require('./formatter');
const fs = require("fs");

async function sendMsg(req, res, conn) {
    const errors = validationResult(req).formatWith(({msg}) => {
        return msg;
    });

    if (!errors.isEmpty()) {
        return res.status(422).json({
            status: false,
            message: errors.mapped()
        });
    }
    const message = req.body.message;
    if (req.body.number.length > 15) {
        var number = req.body.number;
        conn.sendMessage(number, message, MessageType.text).then(response => {
            res.status(200).json({
                status: true,
                response: response
            });
        }).catch(err => {
            res.status(500).json({
                status: false,
                response: err
            });
        });
        return
    } else {
        var number = phoneNumberFormatter(req.body.number);
    }

    if (fs.existsSync('./session.json')) {
        var numberExists = await conn.isOnWhatsApp(number);
        if (!numberExists) {
            return res.status(422).json({
                status: false,
                message: 'The number is not registered'
            });
        }
        await conn.sendMessage(number, message, MessageType.text).then(response => {
            res.status(200).json({
                status: true,
                response: response
            });
        }).catch(err => {
            console.log("500");
            res.status(500).json({
                status: false,
                response: err
            });
        });

    } else {
        res.writeHead(401, {
            'Content-Type': 'application/json'
        });
        res.end(JSON.stringify({
            status: false,
            message: 'Please scan the QR before use the API'
        }));
    }
}


module.exports = {sendMsg};
