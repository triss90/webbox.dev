<?php
include_once("punycode.class.php");

$idn = htmlspecialchars($_POST['idn']);

if (substr( $idn, 0, 4 ) === "xn--") {
    echo Punycode::decodeHostname($idn);
} else {
    echo Punycode::encodeHostname($idn);
}