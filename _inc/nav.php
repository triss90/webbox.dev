<a href="/" class="navigation_logo desktop"><h1>webbox</h1></a>
<a href="/" class="navigation_logo mobile"><h1>&nbsp;w&nbsp;</h1></a>
<div class="navigation_inner">
	<input type="text" class="horizontal-spacer nav-search" id="filter" onkeyup="filter()" placeholder="Find a tool...">
	
	<div class="nav-items">
		<ul>
			<li class="item"><a href="/password-generator" class="password-generator"><img src="/assets/img/password.svg" alt="password generator icon"> <span>Password Generator</span></a></li>
			<li class="item"><a href="/idn-converter" class="idn-converter"><img src="/assets/img/idn.svg" alt="icon alt text"> <span>IDN Converter</span></a></li>
			<li class="item external"><a href="https://colordrop.io" target="_blank" class="colordrop"><img src="/assets/img/color-palette.svg" alt="colordrop icon"> <span>Color Palettes</span></a></li>
			<li class="item"><a href="/identity-generator" class="identity-generator"><img src="/assets/img/identity.svg" alt="identity icon"> <span>Identity Generator</span></a></li>
			<li class="item"><a href="/color-converter" class="color-converter"><img src="/assets/img/color-converter.svg" alt="color palette"> <span>Color Code Converter</span></a></li>
			<li class="item external"><a href="https://leakedpassword.com" target="_blank" class="leakedpassword"><img src="/assets/img/leaked-password.svg" alt="leaked password icon"> <span>Leaked Password</span></a></li>
			<li class="item"><a href="/gradient" class="gradient"><img src="/assets/img/gradient-editor.svg" alt="Gradient icon"> <span>Gradient Editor</span></a></li>
			<li class="item"><a href="/whois" class="whois"><img src="/assets/img/whois.svg" alt="DNS lookup icon"> <span>Whois Lookup</span></a></li>
			<li class="item"><a href="/lorem-ipsum" class="lorem-ipsum"><img src="/assets/img/lorem.svg" alt="lorem ipsum text icon"> <span>Lorem Ipsum Generator</span></a></li> 
			<li class="item"><a href="/meta" class="meta"><img src="/assets/img/meta.svg" alt="meta data icon"> <span>Meta Data Generator</span></a></li> 
			<li class="item"><a href="/smtp" class="smtp"><img src="/assets/img/smtp.svg" alt="SMTP test icon"> <span>SMTP Test</span></a></li>
			<li class="item"><a href="/dns" class="dns"><img src="/assets/img/dns.svg" alt="DNS lookup icon"> <span>DNS Lookup</span></a></li>
			<li class="item external"><a href="https://scutum.pw" target="_blank" class="scutum"><img src="/assets/img/encryption.svg" alt="encryption icon"> <span>Text Encryption</span></a></li>
			<li class="item external"><a href="https://compressionbear.com" target="_blank" class="compressionbear"><img src="/assets/img/optimization.svg" alt="optimization icon"> <span>Image Compression</span></a></li>
			<li class="item"><a href="/ip-lookup" class="ip-lookup"><img src="/assets/img/ip-lookup.svg" alt="IP lookup icon"> <span>IP Lookup</span></a></li>
			<li class="item external"><a href="https://yirra.net" target="_blank" class="yirra"><img src="/assets/img/short.svg" alt="short icon"> <span>URL Shortener</span></a></li>
			<li class="item"><a href="/fluid-typography" class="fluid-typography"><img src="/assets/img/fluid-typography.svg" alt="Fluid Typography icon"> <span>Fluid Typography</span></a></li>
			<li class="item external"><a href="https://gridder.io" target="_blank" class="gridder"><img src="/assets/img/grid.svg" alt="grid icon"> <span>Flexbox Grid</span></a></li>
			<li class="item"><a href="/port-scanner" class="portscanner"><img src="/assets/img/port-scanner.svg" alt="Port Scanner icon"> <span>Port Scanner</span></a></li>
			<li class="item"><a href="/ssh-key" class="ssh"><img src="/assets/img/ssh.svg" alt="SSH Key Generator"> <span>SSH Key Generator</span></a></li>
			<li class="item"><a href="/htpasswd" class="htpasswd"><img src="/assets/img/htpasswd.svg" alt="htpasswd generator icon"> <span>Htpasswd Generator</span></a></li>
			<li class="item external"><a href="https://mrkdwn.net" target="_blank" class="mrkdwn"><img src="/assets/img/mrkdwn.svg" alt="markdown icon"> <span>Markdown Editor</span></a></li>
			<li class="item"><a href="/css-grid" class="css-grid"><img src="/assets/img/cssgrid.svg" alt="css grid icon"> <span>CSS Grid Generator</span></a></li>
			<li class="item"><a href="/cron" class="cron"><img src="/assets/img/schedule.svg" alt="crontab icon"> <span>Crontab Generator</span></a></li>
			<li class="item"><a href="/placeholder" class="placeholder"><img src="/assets/img/placeholder.svg" alt="placeholder icon"> <span>Image Placeholder</span></a></li>
			<li class="item"><a href="/pattern" class="pattern"><img src="/assets/img/pattern.svg" alt="pattern icon"> <span>CSS Pattern Generator</span></a></li>
			<li class="item"><a href="/filter" class="filter"><img src="/assets/img/filter.svg" alt="filter icon"> <span>CSS Image Filter</span></a></li>
			<li class="item"><a href="/morse" class="morse"><img src="/assets/img/morse.svg" alt="morse icon"> <span>Morse Code Converter</span></a></li>
			<li class="item"><a href="/device-info" class="device-info"><img src="/assets/img/devices.svg" alt="device icon"> <span>Device Information</span></a></li>
		</ul>
	</div>
	
	<script>
		function filter() {
			let title;
			const input = document.getElementById("filter");
			const filter = input.value.toUpperCase();
			const items = document.querySelectorAll(".item");
			for (i = 0; i < items.length; i++) {
				title = items[i].getElementsByTagName("a")[0];
				txtValue = title.textContent || title.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					items[i].style.display = "";
				} else {
					items[i].style.display = "none";
				}
			}
		}
	</script>
	
</div>