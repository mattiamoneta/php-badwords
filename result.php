<?php

    $textToCensor = $_GET['textToCensor'];
    $wordToCensor = $_GET['wordToCensor'];
    $result = null;
    $msg = null;

    if(str_contains($textToCensor, $wordToCensor)){
        $result = str_ireplace($wordToCensor, '***', $textToCensor);
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                    Nessuna occorenza trovata
                </div>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <body>
        <main>
            <div class="container">
                <div class="row p-5">

                    <?php if($msg != null){ echo $msg; }?>

                    <h1 class="mb-5 display-4 text-center">Risultato</h1>

                    <div class="col-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Lunghezza paragrafo: <span class="text-dark"><?php echo strlen($result) . ' parole'; ?></span></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Parola censurata: <span class="text-dark"><?php echo $wordToCensor; ?></span></h6>
                                <p class="card-text py-3">
                                    <?php echo $result; ?>
                                </p>
                            </div>
                        </div>

                        <a href="index.php" class="btn btn-success mt-5">Indietro</a>
                    </div>


                    


                </div>
            </div>
        </main>
    </body>
</html>