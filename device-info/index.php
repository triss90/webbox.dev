<?php
$title = "Device Information";
$description = "Get information about your device, browser, network and location.";


function getClientIP(){
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
	$ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

$ipaddress = getClientIP();

function ip_details($ip) {
  $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
  $details = json_decode($json, true);
  return $details;
}

$details = ip_details($ipaddress);

$location = explode(",", $details['loc']);
$long = $location[0];
$lat = $location[1];

?>

<?php include_once("../_inc/header.php"); ?>

<style>
	h4 {
		margin-top: 0.75rem;
		margin-bottom: 0rem;
	}
	
</style>

<div class="wrapper" id="device-info">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Device Information</h1>
					<h2 class="small center">Check to see information about your device.</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="tiny-12 small-6 medium-4 large-4">
					<h3>Browser Information</h3>
					<div class="browser"></div>
					<div class="cursor"><br><strong>Cursor at: </strong></div>
				</div>
				<div class="tiny-12 small-6 medium-4 large-4">
					<h3>Device Information</h3>
					<div class="device"></div>
					<div class="ip"><strong>Network IP: </strong><span id="list"></span></div>
				</div>
				<div class="tiny-12 small-6 medium-4 large-4">
					<h3>IP Information</h3>
					<div class="ip">
						<strong>IP: </strong><?php echo $ipaddress; ?><br>
						<strong>ISP: </strong><?php echo $details['org']; ?><br>
						<br>
						<strong>Timezone: </strong><?php echo $details['timezone']; ?><br>
						<br>
						<strong>City: </strong><?php echo $details['city']; ?><br>
						<strong>Region: </strong><?php echo $details['region']; ?><br>
						<strong>Country: </strong><?php echo $details['country']; ?><br>
						<strong>Location: </strong>
						<ul style="margin-top: 0; margin-bottom: 0.3rem;">
							<li>Latitude: <?php echo "<code>".$long."</code>"; ?></li>
							<li>Longitude: <?php echo "<code>".$lat."</code>"; ?></li>
						</ul>
					</div>
				</div>
				<div class="tiny-12">
					<br><h3>Map: </h3>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $long; ?>%20<?php echo $lat; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
				</div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script>
	
	(function () {
		'use strict';
		
		var module = {
			options: [],
			header: [navigator.platform, navigator.userAgent, navigator.appVersion, navigator.vendor, window.opera, navigator.deviceMemory],
			dataos: [
				{ name: 'Windows Phone', value: 'Windows Phone', version: 'OS' },
				{ name: 'Windows', value: 'Win', version: 'NT' },
				{ name: 'iPhone', value: 'iPhone', version: 'OS' },
				{ name: 'iPad', value: 'iPad', version: 'OS' },
				{ name: 'Kindle', value: 'Silk', version: 'Silk' },
				{ name: 'Android', value: 'Android', version: 'Android' },
				{ name: 'PlayBook', value: 'PlayBook', version: 'OS' },
				{ name: 'BlackBerry', value: 'BlackBerry', version: '/' },
				{ name: 'Macintosh', value: 'Mac', version: 'OS X' },
				{ name: 'Linux', value: 'Linux', version: 'rv' },
				{ name: 'Palm', value: 'Palm', version: 'PalmOS' }
			],
			databrowser: [
				{ name: 'Chrome', value: 'Chrome', version: 'Chrome' },
				{ name: 'Firefox', value: 'Firefox', version: 'Firefox' },
				{ name: 'Safari', value: 'Safari', version: 'Version' },
				{ name: 'Internet Explorer', value: 'MSIE', version: 'MSIE' },
				{ name: 'Opera', value: 'Opera', version: 'Opera' },
				{ name: 'BlackBerry', value: 'CLDC', version: 'CLDC' },
				{ name: 'Mozilla', value: 'Mozilla', version: 'Mozilla' }
			],
			init: function () {
				var agent = this.header.join(' '),
					os = this.matchItem(agent, this.dataos),
					browser = this.matchItem(agent, this.databrowser);
				
				return { os: os, browser: browser };
			},
			matchItem: function (string, data) {
				var i = 0,
					j = 0,
					html = '',
					regex,
					regexv,
					match,
					matches,
					version;
				
				for (i = 0; i < data.length; i += 1) {
					regex = new RegExp(data[i].value, 'i');
					match = regex.test(string);
					if (match) {
						regexv = new RegExp(data[i].version + '[- /:;]([\\d._]+)', 'i');
						matches = string.match(regexv);
						version = '';
						if (matches) { if (matches[1]) { matches = matches[1]; } }
						if (matches) {
							matches = matches.split(/[._]+/);
							for (j = 0; j < matches.length; j += 1) {
								if (j === 0) {
									version += matches[j] + '.';
								} else {
									version += matches[j];
								}
							}
						} else {
							version = '0';
						}
						return {
							name: data[i].name,
							version: parseFloat(version)
						};
					}
				}
				return { name: 'unknown', version: 0 };
			}
		};
		
		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;
		var screenHeight = window.screen.height;
		var screenWidth = window.screen.width;
		var cookies = (navigator.cookieEnabled) ? "Enabled" : "Disabled"; 
		
		var e = module.init();
		var browserData = '';
		var deviceData = '';
		var debug = '';
			
		const browserElement = document.querySelector('.browser');
		const deviceElement = document.querySelector('.device');
		const cursorElement = document.querySelector('.cursor');
		
		var pointerX = -1;
		var pointerY = -1;
		document.onmousemove = function(event) {
			pointerX = event.pageX;
			pointerY = event.pageY;
		}
		setInterval(pointerCheck, 1000);
		function pointerCheck() {
			cursorElement.innerHTML = '<br><strong>Cursor at: </strong><code>'+pointerX+'px</code>, <code>'+pointerY+'px</code>';
		}
		
		deviceData += '<img src="' + e.os.name.toLowerCase() + '.png" width="64px" />';
		deviceData += '<h4>' + e.os.name + '(v. '+e.os.version+')</h4>';
		deviceData += '<br>';
		deviceData += '<strong>Screen Size: </strong>: <code>' + screenWidth + 'px</code> x <code>' + screenHeight + 'px</code><br/>';
		
		browserData += '<img src="' + e.browser.name.toLowerCase() + '.png" width="64px" />';
		browserData += '<h4>' + e.browser.name + ' (v.'+e.browser.version+')</h4>';
		browserData += '<br>';
		browserData += '<strong>Window Size</strong>: <code>' + windowWidth + 'px</code> x <code>' + windowHeight + 'px</code><br/>';
		browserData += '<strong>Cookies:</strong> <span class="">' + cookies + '</span><br/>';	
		browserData += '<br>';
		browserData += '<strong>User Agent:</strong> <i>' + navigator.userAgent + '</i><br/>';
		browserData += '<strong>App Version:</strong> ' + navigator.appVersion + '<br/>';
		browserData += '<strong>Platform:</strong> ' + navigator.platform + '<br/>';
		browserData += '<strong>Vendor:</strong> ' + navigator.vendor + '<br/>';
		
		
		// Append data
		browserElement.innerHTML = browserData;
		deviceElement.innerHTML = deviceData;
	}());


	// NOTE: window.RTCPeerConnection is "not a constructor" in FF22/23
	var RTCPeerConnection = /*window.RTCPeerConnection ||*/ window.webkitRTCPeerConnection || window.mozRTCPeerConnection;
	
	if (RTCPeerConnection) (function () {
		var rtc = new RTCPeerConnection({iceServers:[]});
		if (1 || window.mozRTCPeerConnection) { 
			rtc.createDataChannel('', {reliable:false});
		};
		
		rtc.onicecandidate = function (evt) {
			if (evt.candidate) grepSDP("a="+evt.candidate.candidate);
		};
		rtc.createOffer(function (offerDesc) {
			grepSDP(offerDesc.sdp);
			rtc.setLocalDescription(offerDesc);
		}, function (e) { console.warn("offer failed", e); });
		
		
		var addrs = Object.create(null);
		addrs["0.0.0.0"] = false;
		function updateDisplay(newAddr) {
			if (newAddr in addrs) return;
			else addrs[newAddr] = true;
			var displayAddrs = Object.keys(addrs).filter(function (k) { return addrs[k]; });
			document.getElementById('list').textContent = displayAddrs.join(" or perhaps ") || "n/a";
		}
		
		function grepSDP(sdp) {
			var hosts = [];
			sdp.split('\r\n').forEach(function (line) {
				if (~line.indexOf("a=candidate")) {
					var parts = line.split(' '),
						addr = parts[4],
						type = parts[7];
					if (type === 'host') updateDisplay(addr);
				} else if (~line.indexOf("c=")) {
					var parts = line.split(' '),
						addr = parts[2];
					updateDisplay(addr);
				}
			});
		}
	})(); else {
		document.getElementById('list').innerHTML = "<code>ifconfig | grep inet | grep -v inet6 | cut -d\" \" -f2 | tail -n1</code>";
		document.getElementById('list').nextSibling.textContent = "In Chrome and Firefox your IP should display automatically, by the power of WebRTCskull.";
	}
	
	
	
</script>


<?php include_once("../_inc/footer.php"); ?>





