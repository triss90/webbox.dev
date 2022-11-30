<?php
error_reporting(0);
include('php-whois-master/src/Phois/Whois/Whois.php');

$sld = htmlspecialchars($_POST['domainName']);

$domain = new Phois\Whois\Whois($sld);

$whois_answer = $domain->info();

echo "<pre>";

echo $whois_answer . "<br>";

if ($domain->isAvailable()) {
    echo "<span style='color:var(--color-green-1);'>Domain is available</span> <br>";
} else {
    echo "<span style='color:var(--color-red-1);'>Domain is registered</span> <br>";
}

echo "</pre>";

?>
