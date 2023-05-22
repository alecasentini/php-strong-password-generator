<?php
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

session_start();

if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    $randomPassword = generateRandomPassword($passwordLength);
    $_SESSION['randomPassword'] = $randomPassword;
    header('Location: password.php');
    exit;
}

?>