<?php

include('php-whois-master/src/Phois/Whois/Whois.php');

$sld = htmlspecialchars($_POST['domainName']);

$domain = new Phois\Whois\Whois($sld);

$whois_answer = $domain->info();

echo $whois_answer;

if ($domain->isAvailable()) {
    echo "Domain is available\n";
} else {
    echo "Domain is registered\n";
}

?>
