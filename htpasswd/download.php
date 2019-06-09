<?php
header('Content-Disposition: attachment; filename=".htpasswd"');
$userName = $_GET['username'];
$clearTextPassword = $_GET['password'];
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

// Print encrypted password
echo $userName . ":" . $password;

