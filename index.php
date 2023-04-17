<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <body>
        
    <main>
        <div class="container">
            <div class="row py-5">
            <h2 class="mb-5 display-4 text-center">Testo da censurare</h2>
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="result.php" method="GET">
                            <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="textToCensor" name="textToCensor"></textarea>
                                <label for="textToCensor">Paragrafo</label>
                            </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="wordToCensor" placeholder="Parola da censurare" name="wordToCensor">
                                    <label for="wordToCensor" class="form-label">Parola da censurare</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Invia Form</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>

    </body>
</html>