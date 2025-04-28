<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>Caro Admin, una nuova richiesta!</h1>
        <h2>Un nuovo utente vuole diventare revisore</h2>
        <h2>Ecco i suoi dati:</h2>
        <p><strong>Nome:</strong> {{$user->name}}</p>
        <p><strong>Email:</strong> {{$user->email}}</p>
        <p>Ed ecco perchè vorrebbe diventare revisore:</p>
        <p>{{$userMessage}}</p>
        <p>Se vuoi renderlo revisor clicca qui:</p>
        <a href="{{route('make.revisor', compact('user'))}}">Rendi revisor</a>
    </div>
</body>
</html>