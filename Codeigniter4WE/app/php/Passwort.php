<?php

$passwort = 'ichbinsicher';
$passwort_hashed = '';
$passwort_verified = false;

$passwort_hashed = password_hash($passwort, PASSWORD_DEFAULT, ["cost" => 10]);

if (password_verify ($passwort, $passwort_hashed))
    $passwort_verified = true;
//pw aus db mit eingegebem abgleichen

echo('Verified: ' . $passwort_verified . '<br><br>');
