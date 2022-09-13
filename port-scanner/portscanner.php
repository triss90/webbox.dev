<?php
/* 
| Port numbers: 
| -----------------------
| Port 21   = FTP       |
| Port 22   = SSH       |
| Port 23   = Telnet    |
| Port 25   = SMTP      |
| Port 53   = Domain    |
| Port 80   = HTTP      |
| Port 443  = HTTPS     |
| Port 110  = POP3      |
| Port 1433 = ms-sql-s  |
| Port 3306 = MySQL     |
| -----------------------
*/ 

$ports = htmlspecialchars($_POST['ports']);
if (empty($ports)) {
	$ports = array(21, 22, 23, 25, 53, 80, 443, 110, 1433, 3306);
} else {
	$ports = array_map('intval', explode(',', $ports));
}
$domain = htmlspecialchars($_POST['domain']);

foreach($ports as $port) {
	if($pf = @fsockopen($domain, $port, $err, $err_string, 1)) {
		$results[$port] = true;
		fclose($pf);
	} else {
		$results[$port] = false;
	}
}

foreach($results as $port=>$val)    {
	$prot = getservbyport($port,"tcp");
			echo "Port $port ($prot): ";
	if($val) {
		echo "<span style=\"color:var(--color-green-1)\">OK</span><br/>";
	}
	else {
		echo "<span style=\"color:var(--color-red-1)\">Inaccessible</span><br/>";
	}
}
