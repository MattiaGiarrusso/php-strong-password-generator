<?php
require_once __DIR__ . '/functions.php';

$lengthPassword = isset($_GET['lengthPassword']) ? $_GET['lengthPassword'] : '';

$userPassword = generatePassword($lengthPassword);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class='text-center'>
        <h1 class='text-light'>Strong Password Generator</h1>
        <h3 class='text-secondary'>Genera una password sicura</h3>
    </header>
    <main>
        
        <?php if ($lengthPassword!=0 && !empty($lengthPassword)) { ?>
            <div class="container text-light bg-success rounded my-2 p-3">
                <span>
                    <?php echo "La tua password è: $userPassword" ?>
                </span>
            </div>
        <?php } ?>
            
        
        
        <form class="container bg-light rounded p-3" method='GET'>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <label for="lengthPassword">Lunghezza della password</label>
                </span>
                <input name='lengthPassword' id="lengthPassword" type="number" class="form-control" placeholder="inserisci un numero">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>

            <!-- <div class='container px-4 d-flex justify-content-between'>
                <div>
                    <label>Consenti ripetizioni di uno o più caratteri:</label>
                </div>
                
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="optionYes" id="optionYes">
                        <label class="form-check-label" for="optionYes">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="optionNone" id="optionNone">
                        <label class="form-check-label" for="optionNone">No</label>
                    </div>

                    <div class='mt-4'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="optionLetter">
                            <label class="form-check-label" for="flexCheckDefault">Lettere</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="optionNum">
                            <label class="form-check-label" for="flexCheckChecked">Numeri</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="optionSym">
                            <label class="form-check-label" for="flexCheckChecked">Simboli</label>
                        </div>
                    </div> 

                </div>                
                
            </div> -->

        </form>
    </main>
</body>
</html>