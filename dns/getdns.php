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
	$dns = dns_get_record($domain);
	$cname_autodiscover = dns_get_record('autodiscover.'.$domain);
	$repeat = $_POST['repeat'];
	if ($repeat != "") {
	    $repeat = "&repeat=1";
    }

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

    // Get Autodiscover CNAME
    foreach($cname_autodiscover as $item) {
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
				<td>@</th>
				<td>'.$cnameType.'</th>
				<td>'.$cnameTtl.'</td>
				<td>'.$cnameValue.'</td>
				<td class="time">'.$date->format('Y-m-d H:i:s').'</td>
			</tr>
		';
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