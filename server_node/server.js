var io = require('socket.io')(6005)
console.log('connected to port 6005')
io.on('error', function(socket)
{
  console.log('error')
})

io.on('connection', function(socket)
{
  console.log('connected'+socket.id)
  io.emit("heloo");
})

var Redis = require('ioredis')
var redis = new Redis(1000)
//console.log(redis);
// redis.psubsribe("*", function(error,count)
// {

// })

redis.on('message', function(partner, channel, message)
{
  message = JSON.parse(message)
  io.emit(channel+ ":" +message.event,message.data.message)
  console.log("sent")
})

  