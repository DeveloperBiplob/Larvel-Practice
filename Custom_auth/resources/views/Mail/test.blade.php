<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Mail</title>
</head>
<body style="margin: 0; padding:0">
    <div style="width:600px; margin:auto; border:1px solid #000">
        <h1>{{ $user->name }}</h1>
        <h1>{{ $user->email }}</h1>
        <h1>{{ $user->created_at->format('Y-m-d') }}</h1>
        <h1>{{ $user->created_at->format('Y-m-d h:i:s') }}</h1>
        <h1>{{ $user->created_at->diffForHumans() }}</h1>
    </div>
</body>
</html>
