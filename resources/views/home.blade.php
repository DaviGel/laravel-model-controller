<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Template</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row gap-3 justify-content-center">
                @foreach ($movies as $movie)
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-6">
                                Titolo: {{ $movie['title'] }}<br>Title: {{ $movie['original_title'] }}
                            </h5>
                            <div class="card-subtitle">
                                <hr>
                                <p>Nationality: {{ $movie['nationality'] }}</p>
                                <hr>
                                <p>Vote: {{ $movie['vote'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
