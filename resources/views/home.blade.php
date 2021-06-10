<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model-Controller</title>
</head>
<body>
    <h1>Sono la Homepage!!</h1>

    @foreach ($movies as $movie)
        <ul>
            <li>{{ $movie->title }}</li>
        </ul>
    @endforeach

</body>
</html>