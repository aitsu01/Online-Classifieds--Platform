<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    <style>
        h1{
            text-align: center;
            font-size: 5vw;
            color: red;
            margin: 3vw;
        }
        h2{
            text-align: start;
            font-size: 4vw;
            color: black;
        }
        p{
            text-align: start;
            font-size: 3vw;
            color: black;
        }

        .message{
            font-style: italic;
        }

        .btn{
            padding: 1vw;
            background-color: red;
            color: white;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
        <h1>New revisor request!</h1>
        <h2>Some user wants to be a revisor</h2>
        <h2>Here are the details:</h2>
        <p><strong>Name:</strong> {{$user->name}}</p>
        <p><strong>Email:</strong> {{$user->email}}</p>
        <p>Why do you want to be a revisor?:</p>
        <p class="message">"{{$userMessage}}"</p>
        <p>If you want to make {{$user->name}} revisor, click on the button:</p>
        <a href="{{route('make.revisor', compact('user'))}}" class="btn">Make {{$user->name}} revisor</a>
    </div>
</body>
</html>