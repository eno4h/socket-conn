@extends('master')

@section('content')
    <p id="power">0</p>
@stop

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
    <script>
        //var socket = io('http://localhost:3000');
        var socket = io('http://127.0.0.1:3000');
        var i = 0;
        socket.on("demo:App\\Events\\ChartEvent", function(message){
            // increase the power everytime we load test route
            console.log(message);
            $('#power').text(JSON.stringify(message)+ ' call ' + i +' time!');
            i++;
        });
    </script>
@stop