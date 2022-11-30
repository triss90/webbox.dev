<?php

$post_username = $_POST['username'];
$post_password = $_POST['password'];
$post_realm = $_POST['realm'];
$post_encryption = $_POST['encryption'];

function encryptBcrypt($username, $password) {
	$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
	$string = $username.":".$encrypted_password;
	return $string;
}
function encryptSha1($username, $password) {
	$encrypted_password = sha1($password);
	$string = $username.":".$encrypted_password;
	return $string;
}
function encryptMd5($username, $password) {
	$encrypted_password = md5($password);
	$string = $username.":".$encrypted_password;
	return $string;
}
function encryptCrypt($username, $password) {
	$encrypted_password = crypt($password);
	$string = $username.":".$encrypted_password;
	return $string;
}

echo "<div class='row'>";


if ($post_encryption == "all") {
	echo "<div class='tiny-12 small-6'>";
	echo "<h2>.htpasswd file</h2>";
	echo "<b>BCRYPT</b><br><textarea>" . encryptBcrypt($post_username, $post_password) . "</textarea><br>";
	echo "<b>SHA1</b><br><textarea>" . encryptSha1($post_username, $post_password) . "</textarea><br>";
	echo "<b>MD5</b><br><textarea>" . encryptMd5($post_username, $post_password) . "</textarea><br>";
	echo "<b>CRYPT</b><br><textarea>" . encryptCrypt($post_username, $post_password) . "</textarea>";
	echo "</div>";
}
if ($post_encryption == "bcrypt") {
	echo "<div class='tiny-12 small-6'>";
	echo "<h2>.htpasswd file</h2>";
	echo "<b>BCRYPT</b><br><textarea>" . encryptBcrypt($post_username, $post_password) . "</textarea><br>";
	echo "</div>";
}
if ($post_encryption == "sha1") {
	echo "<div class='tiny-12 small-6'>";
	echo "<h2>.htpasswd file</h2>";
	echo "<b>SHA1</b><br><textarea>" . encryptSha1($post_username, $post_password) . "</textarea><br>";
	echo "</div>";
}
if ($post_encryption == "md5") {
	echo "<div class='tiny-12 small-6'>";
	echo "<h2>.htpasswd file</h2>";
	echo "<b>MD5</b><br><textarea>" . encryptMd5($post_username, $post_password) . "</textarea><br>";
	echo "</div>";
}
if ($post_encryption == "crypt") {
	echo "<div class='tiny-12 small-6'>";
	echo "<h2>.htpasswd file</h2>";
	echo "<b>CRYPT</b><br><textarea>" . encryptCrypt($post_username, $post_password) . "</textarea>";
	echo "</div>";
}



echo "<div class='tiny-12 small-6'>";
echo "<h2>.htaccess Code</h2>";
echo "<p>&nbsp;</p>";
echo "<textarea rows='16' style=';resize: vertical'>";

echo "### https://webbox.dev/htpasswd \n";
echo "### BEGIN BASIC BLOCK \n";
echo "#&lt;Files wp-login.php&gt; \n";
echo "	AuthType Basic \n";
echo '	AuthName "'.$post_realm.'"';
echo "\n";
echo "	AuthUserFile /full/path/to/.htpasswd";
echo "\n";
echo "	Require user ".$post_username." \n";
echo " 	Satisfy All \n";
echo "#&lt;/Files&gt; \n";
echo "### END BASIC BLOCK \n";

echo "</textarea>";
echo "</div>";

echo "</div>";

















