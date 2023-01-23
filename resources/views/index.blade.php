<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-primary mb-5">Movie</h1>
            <div class="row justify-content-between gy-3">
                @foreach ($movies as $movie )
                <div class="col-3">
                    <div class="card">
                        <div class="card-body d-flex align-items-center flex-column">
                            <h4 class="text-center">
                            {{ $movie->title}}
                            </h4>
                            <ul>
                                <li><h6>{{$movie->original_title}}</h6></li>
                                <li>{{$movie->nationality}}</li>
                                <li>{{$movie->date}}</li>
                                <li>{{$movie->vote}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                   
                @endforeach
            </div>
        </div>
    </body>
</html> 