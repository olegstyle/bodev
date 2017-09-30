<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <h1>User {{ $name }} send message to you)</h1>
        <h2>Email: <a href="mail:{{ $email }}">{{ $email }}</a></h2>
        <h3>Message:</h3>
        <p>{{ $bodyMessage }}</p>
    </body>
</html>
