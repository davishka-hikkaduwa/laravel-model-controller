<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
</head>

<body>
    <h1>MOVIES</h1>

    <div class="card-container">
        @foreach ($data as $movie)
            <div>
                @include('partials._movie-card')
            </div>
        @endforeach
    </div>
</body>

</html>
