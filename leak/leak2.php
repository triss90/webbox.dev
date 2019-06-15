<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://haveibeenpwned.com/api/v2/breachedaccount/oliver.tristan@gmail.com");
curl_setopt($ch, CURLOPT_USERAGENT, "webbox");
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$account = array_map("trim", explode(PHP_EOL, $output));
echo "<pre>";
print_r($account);
echo "</pre>";

