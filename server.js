const express = require('express');
const {Server} = require('socket.io');
const app = express();
const server = require('http').createServer(app);
const io = new Server(server);
const port = process.env.PORT || 3000;

io.on('connection', (socket) => {
    console.log('user connected');
    // socket.on('notification', () => {
    //     // io.emit('notification');
    // });
});

server.listen(port, function(){
    console.log('Server listening at port ', port);
});
