<table class="table">
	<thead>
		<tr>
			<th scope="col">Host</th>
			<th scope="col">Type</th>
			<th scope="col">TTL</th>
			<th scope="col">Value</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$domain = htmlspecialchars($_POST['domainName']);
	$dns = dns_get_record($domain);

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
			</tr>
		';
	}
	?>
	</tbody>
</table>