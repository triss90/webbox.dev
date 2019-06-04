<?php
$userName = $_POST['username'];
$clearTextPassword = $_POST['password'];
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

// Print encrypted password
echo $userName . ":" . $password;
