<?php
include 'functions.php';
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
    <div class="vh-100 w-100 pt-5" style="background-color: #001632">

        <?php 
            session_start();

            if (isset($_SESSION['randomPassword'])) {
                $randomPassword = $_SESSION['randomPassword'];
                echo "<div class='container d-flex flex-column justify-content-center align-items-center bg-white rounded p-3 w-50'>La tua password casuale è:" . "<p class='fw-bolder p-3 fs-3'> $randomPassword</p>" . "</div>";
            } else {
                echo "<div class='container d-flex justify-content-center bg-white rounded p-3 w-50'>Nessuna password generata </div>";
            }
        ?>

    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>