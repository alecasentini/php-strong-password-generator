<?php
function generateRandomPassword($length, $includeLetters, $includeNumbers, $includeSymbols, $allowRepetition) {
    $characters = '';
    if ($includeLetters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($includeNumbers) {
        $characters .= '0123456789';
    }
    if ($includeSymbols) {
        $characters .= '!@#$%^&*()';
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomCharacter = $characters[rand(0, strlen($characters) - 1)];
        if (!$allowRepetition && strpos($password, $randomCharacter) !== false) {
            $i--;
            continue;
        }
        $password .= $randomCharacter;
    }
    return $password;
};


?>