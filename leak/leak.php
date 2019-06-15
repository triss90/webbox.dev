<?php
// Search for partial string in array
function array_search_partial($arr, $keyword) {
    foreach($arr as $index => $string) {
        if (strpos($string, $keyword) !== FALSE)
            return $index;
    }
}

$submitted_password = $_POST['password'];
$hash = sha1($submitted_password);
$hash_prefix = strtoupper(substr($hash, 0, 5));
$hash_suffix = strtoupper(substr($hash, 5, 35));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.pwnedpasswords.com/range/".$hash_prefix);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

$password = array_map("trim", explode(PHP_EOL, $output));

$match =  array_search_partial($password, $hash_suffix);

if ($match != "") {
    $leaked_password_hash = explode(':', $password[$match]);
    echo "<h2 style='color:#D33682; font-size: 5rem;'>Password has been leaked!</h2>";
    echo "<h3 style='font-size: 3rem;'>This password has been seen <code style='color: #D33682;'>".$leaked_password_hash[1]."</code> times before.</h3>";
    echo "<br>";
    echo "<p style='font-size: 1.5rem;'>This password has previously appeared in a data breach and should never be used. If you've ever used it anywhere before, change it!</p>";
} else {
    echo "<h2 style='color:#2AA198; font-size: 5rem;'>Good news!</h2>";
    echo "<br>";
    echo "<p style='font-size: 1.5rem;'>This password wasn't found among any of the leaked passwords. That doesn't necessarily mean it's a good password, merely that it's not indexed. If you're not already using a password manager, you should probably consider doing that.</p>";
}

