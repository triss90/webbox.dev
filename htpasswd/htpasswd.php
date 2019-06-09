<?php
$userName = $_POST['username'];
$clearTextPassword = $_POST['password'];
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

// Print encrypted password
echo "<pre style='padding: 1rem 0.5rem; margin: 0 0.35rem;'>" .$userName . ":" . $password . "</pre>";
echo '<a href="download.php?username='.$userName.'&password='.$password.'" class="btn btn-info" style="margin-top: 2.2rem;">Download .htpasswd</a>';
