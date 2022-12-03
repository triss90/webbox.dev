<?php
$date = new DateTime(gmdate("Y-m-d H:i:sP",time()), new DateTimeZone('UTC'));
$date->setTimezone(new DateTimeZone('Europe/Copenhagen'));
?>
<style>
	table thead tr th {
		cursor: pointer;
	}
</style>
<table class="table" id="table">
	<thead>
		<tr>
			<th scope="col" onclick="sortTable(0)">Host</th>
			<th scope="col" onclick="sortTable(1)">Type</th>
			<th scope="col" onclick="sortTable(2)">TTL</th>
			<th scope="col" onclick="sortTable(3)">Value</th>
			<th scope="col" onclick="sortTable(4)">Last update</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$domain = htmlspecialchars($_POST['domainName']);
	//$domain = 'servicepoint.dk';
	$dns = dns_get_record($domain,DNS_SOA|DNS_NS|DNS_A|DNS_TXT|DNS_MX|DNS_SRV);
	
	// scan følgende for A, TXT, CNAME, SRV etc.
	$commonNames = array();
	$commonNames[] = 'mailforward'; // Mailforwarder Record
	$commonNames[] = 'cpanel'; // Plesk
	$commonNames[] = 'admin'; // generisk
	$commonNames[] = 'panel'; // genetisk
	$commonNames[] = 'intranet'; // genetisk
	$commonNames[] = 'crm'; // genetisk
	$commonNames[] = 'internal'; // genetisk
	$commonNames[] = 'intern'; // genetisk
	$commonNames[] = 'salesforce'; // genetisk
	$commonNames[] = 'chat'; // genetisk
	$commonNames[] = 'im'; // genetisk
	$commonNames[] = 'web'; // genetisk
	$commonNames[] = 'web01'; // genetisk
	$commonNames[] = 'web02'; // genetisk
	$commonNames[] = 'web03'; // genetisk
	$commonNames[] = 'web1'; // genetisk
	$commonNames[] = 'web2'; // genetisk
	$commonNames[] = 'web3'; // genetisk
	$commonNames[] = 'www1'; // genetisk
	$commonNames[] = 'www2'; // genetisk
	$commonNames[] = 'www3'; // genetisk
	$commonNames[] = 'www01'; // genetisk
	$commonNames[] = 'www02'; // genetisk
	$commonNames[] = 'www03'; // genetisk
	$commonNames[] = 'beta'; // genetisk
	$commonNames[] = 'kundecenter'; // genetisk
	$commonNames[] = 'customer'; // genetisk
	$commonNames[] = 'portal'; // genetisk
	$commonNames[] = 'customerportal'; // genetisk
	$commonNames[] = 'webmail'; // Brugers af Plesk, cPanel og Gmail
	$commonNames[] = 'mail'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'pop'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'pop3'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'imap'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'imap4'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'pop3s'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'pops'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'imaps'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'imap4s'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'smtp'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'smtps'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'autodiscover'; // Brugers af Exchange servere / o365
	$commonNames[] = 'calendar'; // Brugers af Gmail
	$commonNames[] = 'contact'; // Brugers af Gmail
	$commonNames[] = 'contacts'; // Brugers af Gmail
	$commonNames[] = 'support'; // Brugers af diverse kayako mm.
	$commonNames[] = 'zendesk'; // Brugers af zendesk
	$commonNames[] = 'freshdesk'; // Brugers af freshdesk
	$commonNames[] = 'fm1._domainkey'; // Brugers af fastmail.fm
	$commonNames[] = 'fm2._domainkey'; // Brugers af fastmail.fm
	$commonNames[] = 'fm3._domainkey'; // Brugers af fastmail.fm
	$commonNames[] = '_domainkey'; // Generisk: domainkey
	$commonNames[] = '_xmpp-server._tcp'; // Generisk: jabber
	$commonNames[] = '_jabber._tcp'; // Generisk: jabber
	$commonNames[] = '_xmpp-client._tcp.'; // Generisk: jabber
	$commonNames[] = 'msoid'; // o365
	$commonNames[] = 'sip'; // o365
	$commonNames[] = 'lyncdiscover'; // o365
	$commonNames[] = 'enterpriseregistration'; // o365
	$commonNames[] = 'enterpriseenrollment'; // o365
	$commonNames[] = '_sip._tls'; // o365
	$commonNames[] = '_sipfederationtls._tcp'; // o365
	$commonNames[] = 'sites'; // Brugers af Gmail
	$commonNames[] = 'docs'; // Brugers af Gmail
	$commonNames[] = 'sheets'; // Brugers af Gmail
	$commonNames[] = '_minecraft._tcp.mc.'; // minecraft (SRV)
	$commonNames[] = 'email'; // Brugers af forskellige mail-tjenester/servere
	$commonNames[] = 'blog'; // Bruges af Tumblr
	$commonNames[] = 'git'; // Bruges af Bitbucket
	$commonNames[] = 'internal'; // Diverse
	$commonNames[] = 'static'; // Diverse
	$commonNames[] = 'server'; // Diverse
	$commonNames[] = 'server01'; // Diverse
	$commonNames[] = 'server02'; // Diverse
	$commonNames[] = 'server03'; // Diverse
	$commonNames[] = 'server1'; // Diverse
	$commonNames[] = 'server2'; // Diverse
	$commonNames[] = 'server3'; // Diverse
	$commonNames[] = 'office'; // Diverse
	$commonNames[] = 'vpn'; // Diverse
	$commonNames[] = 'proxy'; // Diverse


//	$cname_autodiscover = dns_get_record('autodiscover.'.$domain);

	// $repeat = $_POST['repeat'];
	// if ($repeat != "") {
	// 	$repeat = "&repeat=1";
	// }

	// GET DNS
	foreach($dns as $item) {
		// Check if type is set
		if (!isset($item['type'])) {
			$type = "N/A";
		} else {
			$type = $item['type'];
		}

		// Check if value is set
		if (isset($item['target'])) {
			$value = $item['target'];
		} elseif (isset($item['txt'])) {
			$value = $item['txt'];
		} elseif (isset($item['ip'])) {
			$value = $item['ip'];
		} else {
			$value = "N/A";
		}

		// Check if ttl is set
		if (!isset($item['ttl'])) {
			$ttl = "N/A";
		} else {
			$ttl = $item['ttl'];
		}

		// Check if host is set
		if (!isset($item['host'])) {
			$host = "N/A";
		} else {
			$host = $item['host'];
		}

		echo '
			<tr>
				<td>@</th>
				<td>'.$type.'</th>
				<td>'.$ttl.'</td>
				<td>'.$value.'</td>
				<td class="time">'.$date->format('Y-m-d H:i:s').'</td>
			</tr>
		';
	}

	foreach($commonNames as $commonName) {
		$cname = $commonName.".".$domain;
		$cname = dns_get_record($cname,DNS_CNAME);

		// Get Autodiscover CNAME
		foreach($cname as $item) {

			if ($item['type'] == "CNAME") {

				if (!isset($item['type'])) {
					$cnameType = "N/A";
				} else {
					$cnameType = $item['type'];
				}

				// Check if value is set
				if (isset($item['target'])) {
					$cnameValue = $item['target'];
				} elseif (isset($item['txt'])) {
					$cnameValue = $item['txt'];
				} elseif (isset($item['ip'])) {
					$cnameValue = $item['ip'];
				} else {
					$cnameValue = "N/A";
				}

				// Check if ttl is set
				if (!isset($item['ttl'])) {
					$cnameTtl = "N/A";
				} else {
					$cnameTtl = $item['ttl'];
				}

				// Check if host is set
				if (!isset($item['host'])) {
					$cnameHost = "N/A";
				} else {
					$cnameHost = $item['host'];
				}

				echo '
				<tr>
					<td>'.$cnameHost.'</th>
					<td>'.$cnameType.'</th>
					<td>'.$cnameTtl.'</td>
					<td>'.$cnameValue.'</td>
					<td class="time">'.$date->format('Y-m-d H:i:s').'</td>
				</tr>
			';
			}
		}
	}


	?>
	</tbody>
</table>

<script>
	window.history.pushState('DNS Lookup', 'Title', '/dns/?domain=<?php echo $domain ."". $repeat;?>');
</script>


<script>
	function sortTable(n) {
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		table = document.getElementById("table");
		switching = true;
		dir = "asc";
		while (switching) {
			switching = false;
			rows = table.rows;
			for (i = 1; i < (rows.length - 1); i++) {
				shouldSwitch = false;
				x = rows[i].getElementsByTagName("TD")[n];
				y = rows[i + 1].getElementsByTagName("TD")[n];
				if (dir == "asc") {
					if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
						shouldSwitch= true;
						break;
					}
				} else if (dir == "desc") {
					if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
						shouldSwitch = true;
						break;
					}
				}
			}
			if (shouldSwitch) {
				rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
				switching = true;
				switchcount ++;
			} else {
				if (switchcount == 0 && dir == "asc") {
					dir = "desc";
					switching = true;
				}
			}
		}
	}
	sortTable(1);
</script>