<?php
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<div class="vh-100 w-100" style="background-color: #001632">

    <h1 class="text-center text-secondary pt-5">Strong Password Generator</h1>
    <h2 class="text-center text-white">Genera una password sicura</h2>

    <form action="index.php" method="get" class="container d-flex bg-white rounded p-3 w-50">
        <div class="d-flex flex-column w-50">
            <p>Lunghezza password:</p>
            <p>Consenti ripetizioni di uno o più caratteri</p>
            <div class="d-flex mt-5">
                <input type="submit" class="btn btn-primary" value="Invia">
                <input type="submit" class="btn btn-secondary ms-2" value="Annulla">
            </div>
        </div>
        
        <div class="d-flex flex-column w-50">

            <input type="number" name="passwordLength" class="form-control w-50">

            <div class="form-check mt-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Sì
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Lettere
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Numeri
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Simboli
                </label>
            </div>

        </div>
    </form>
    <?php if (isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];
        $randomPassword = generateRandomPassword($passwordLength);
        echo "<div class='container d-flex justify-content-center bg-white rounded p-3 mt-5 w-50'>La tua password casuale è: $randomPassword" . "</div";
    }
    ?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>