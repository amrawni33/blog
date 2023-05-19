<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>

    <article>
        <h1>{{$post-> title;}}</h1>
        <div> {!! $post-> body; !!}</div>
    </article>
    <a href="/">back</a>
</body>
</html>