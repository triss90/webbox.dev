<link rel="stylesheet" href="/assets/css/landinpage.css">
<?php include_once("_inc/header.php"); ?>


<div class="landingpage">
	<div class="container">
		
		<header>
			<div class="row">
				<div class="tiny-12 center-tiny">
					<a href="/" class="logo desktop"><h1>webbox</h1></a>
					<p class="page-title">Tools for developers, designers and content creators...</p>
				</div>
			</div>
		</header>
				
		<main>
			<div class="row">
				<div class="tiny-12">
					<input type="text" class="search top-spacer" id="filter" onkeyup="filterSearch()" placeholder="Find a tool..." autofocus>
					<div class="filter-buttons" style="text-align:center;">
						<br>
						<button class="filter active" data-filter="all" onclick="filterCategory(this)">All</button>
						<button class="filter" data-filter="security" onclick="filterCategory(this)">Security</button>
						<button class="filter" data-filter="design" onclick="filterCategory(this)">Design</button>
						<button class="filter" data-filter="content" onclick="filterCategory(this)">Content</button>
						<button class="filter" data-filter="networking" onclick="filterCategory(this)">Networking</button>
						<button class="filter" data-filter="server" onclick="filterCategory(this)">Server</button><br><br>
					</div>
					
					<script>
						function filterSearch() {
							let title;
							const input = document.getElementById("filter");
							const filter = input.value.toUpperCase();
							const items = document.querySelectorAll(".item");
							for (i = 0; i < items.length; i++) {
								title = items[i].getElementsByTagName("h2")[0];
								txtValue = title.textContent || title.innerText;
								if (txtValue.toUpperCase().indexOf(filter) > -1) {
									items[i].style.display = "";
								} else {
									items[i].style.display = "none";
								}
							}
						}
						function filterCategory(p) {
							const items = document.querySelectorAll(".item");
							const filter = document.querySelectorAll(".filter");
							[].forEach.call(filter, function(el) {
								el.classList.remove("active");
							});
							p.classList.add('active');
							for (i = 0; i < items.length; i++) {
								if (p.dataset.filter == "all") {
									items[i].style.display = "block";
								} else if (items[i].dataset.filterItem == p.dataset.filter) {
									items[i].style.display = "";
								} else {
									items[i].style.display = "none";
								}
							}
						}
					</script>
					
				</div>
			</div>
			
			<div class="row">
				
				<!-- <script src="/assets/js/native.js" type="text/javascript"></script>
				<script>
					// _native.init('CKYI42JJ', {
					_native.init('CESI4K3M', {
						targetClass: 'native-js',
						fallback: '',
						visibleClass: 'native-show'
					});
				</script>
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="all">
					<div class="native-js card">
						<a href="#native_link#" style="text-decoration: none;">
							<div class="tag" style="color: var(--color-purple-1);">Ad</div>
							<div class="native-main card-header">
								<img class="native-img" src="#native_logo#" alt="Carbon Ad Image" style="width:auto; height: 94px;">
							</div>
							<div class="native-details card-body">
								<h2 class="native-company">#native_company#</h2>
								<p class="native-desc">#native_desc#</p>
								<span class="native-cta" style="text-align:center; width:100%; display:block; padding-bottom:0.5rem; color:var(--color-purple-1);">#native_cta#</span>
							</div>
						</a>
					</div>
				</div> -->
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="/password-generator" class="card">
						<div class="card-header">
							<img src="/assets/img/password.svg" alt="Password Generator icon">
						</div>
						<div class="card-body">
							<h2>Password Generator</h2>
							<p>Generate passwords securely on your device. No information is sent to our servers!</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/idn-converter" class="card">
						<div class="card-header">
							<img src="/assets/img/idn.svg" alt="IDN Converter icon">
						</div>
						<div class="card-body">
							<h2>IDN Converter</h2>
							<p>Convert international domain names or email addresses to ACE/Punycode.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="https://colordrop.io" target="_blank" class="card">
						<div class="tag">colordrop.io</div>
						<div class="card-header">
							<img src="/assets/img/color-palette.svg" alt="grid icon">
						</div>
						<div class="card-body">
							<h2>Color Palettes</h2>
							<p>Thousands of curated colors, palettes for use in your products.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="/identity-generator" class="card">
						<div class="card-header">
							<img src="/assets/img/identity.svg" alt="Identity Generator icon">
						</div>
						<div class="card-body">
							<h2>Identity Generator</h2>
							<p>Generate a fully randomized identity, with name, sex, age and more.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/color-converter" class="card">
						<div class="card-header">
							<img src="/assets/img/color-converter.svg" alt="Color Converter icon">
						</div>
						<div class="card-body">
							<h2>Color Code Converter</h2>
							<p>Generate passwords securely on your device. No information is sent to our servers!</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="https://leakedpassword.com" target="_blank" class="card">
						<div class="tag">leakedpassword.com</div>
						<div class="card-header">
							<img src="/assets/img/leaked-password.svg" alt="leaked password icon">
						</div>
						<div class="card-body">
							<h2>Leaked Password</h2>
							<p>Securely test if your password has been leaked.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/gradient" class="card">
						<div class="card-header">
							<img src="/assets/img/gradient-editor.svg" alt="Gradient icon">
						</div>
						<div class="card-body">
							<h2>Gradient Generator</h2>
							<p>Generate linear and radial gradients.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="/meta" class="card">
						<div class="card-header">
							<img src="/assets/img/meta.svg" alt="Meta data generator">
						</div>
						<div class="card-body">
							<h2>Meta Data Generator</h2>
							<p>Generate correct meta tags to uptimize SEO.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/whois" class="card">
						<div class="card-header">
							<img src="/assets/img/whois.svg" alt="Whois icon">
						</div>
						<div class="card-body">
							<h2>Whois Lookup</h2>
							<p>Check domain availability and contact information with a simply whois lookup.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="/lorem-ipsum" class="card">
						<div class="card-header">
							<img src="/assets/img/lorem.svg" alt="Lorem Ipsum icon">
						</div>
						<div class="card-body">
							<h2>Lorem Ipsum Generator</h2>
							<p>Generate passwords securely on your device. No information is sent to our servers!</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="/ssh-key" class="card">
						<div class="card-header">
							<img src="/assets/img/ssh.svg" alt="SSH Key Generator">
						</div>
						<div class="card-body">
							<h2>SSH Key Generator</h2>
							<p>Generate a keypair to be used with openSSH using the ssh-keygen function in javascript.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/smtp" class="card">
						<div class="card-header">
							<img src="/assets/img/smtp.svg" alt="SMTP Test icon">
						</div>
						<div class="card-body">
							<h2>SMTP Test</h2>
							<p>Test your connection to any SMTP server, to help you troubleshoot email issues!</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/dns" class="card">
						<div class="card-header">
							<img src="/assets/img/dns.svg" alt="DNS Lookup icon">
						</div>
						<div class="card-body">
							<h2>DNS Lookup</h2>
							<p>Look up DNS records on any domain and monitor changes to records.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="https://scutum.pw" target="_blank" class="card">
						<div class="tag">scutum.pw</div>
						<div class="card-header">
							<img src="/assets/img/encryption.svg" alt="Encryption icon">
						</div>
						<div class="card-body">
							<h2>Text Encryption</h2>
							<p>Encrypt and transfer passwords and other sensitive data with a one-time link.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="https://gridder.io" target="_blank" class="card">
						<div class="tag">gridder.io</div>
						<div class="card-header">
							<img src="/assets/img/grid.svg" alt="grid icon">
						</div>
						<div class="card-body">
							<h2>Flexbox Grid</h2>
							<p>Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, alignments and viewport widths.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/ip-lookup" class="card">
						<div class="card-header">
							<img src="/assets/img/ip-lookup.svg" alt="IP Lookup icon">
						</div>
						<div class="card-body">
							<h2>Public IP Lookup</h2>
							<p>Check your public IP, location, ISP and more.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="https://yirra.net" target="_blank" class="card">
						<div class="tag">yirra.net</div>
						<div class="card-header">
							<img src="/assets/img/short.svg" alt="short icon">
						</div>
						<div class="card-body">
							<h2>URL Shortener</h2>
							<p>Yirra is a free custom URL Shortener with analytics! Shortened URLs will never expire.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/fluid-typography" class="card">
						<div class="card-header">
							<img src="/assets/img/fluid-typography.svg" alt="Fluid Typography icon">
						</div>
						<div class="card-body">
							<h2>Fluid Typography</h2>
							<p>Create text that scales with the window size, so that your headings look great on any screen.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="https://compressionbear.com" target="_blank" class="card">
						<div class="tag">compressionbear.com</div>
						<div class="card-header">
							<img src="/assets/img/optimization.svg" alt="optimization icon">
						</div>
						<div class="card-body">
							<h2>Image Compression</h2>
							<p>Compress your images by up to 90%.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="networking">
					<a href="/port-scanner" class="card">
						<div class="card-header">
							<img src="/assets/img/port-scanner.svg" alt="Port Scanner icon">
						</div>
						<div class="card-body">
							<h2>Port Scanner</h2>
							<p>Scan IP or domain for open ports.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="/morse" class="card">
						<div class="card-header">
							<img src="/assets/img/morse.svg" alt="Port Scanner icon">
						</div>
						<div class="card-body">
							<h2>Morse Code Converter</h2>
							<p>Encode or decode morse.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="/htpasswd" class="card">
						<div class="card-header">
							<img src="/assets/img/htpasswd.svg" alt="htpasswd icon">
						</div>
						<div class="card-body">
							<h2>Htpasswd Generator</h2>
							<p>htpasswd generator used to create Htaccess .htpasswd files.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="content">
					<a href="https://mrkdwn.net" target="_blank" class="card">
						<div class="tag">mrkdwn.net</div>
						<div class="card-header">
							<img src="/assets/img/mrkdwn.svg" alt="markdown icon">
						</div>
						<div class="card-body">
							<h2>Markdown Editor</h2>
							<p>Edit and export markdown in formatted text or HTML.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/css-grid" class="card">
						<div class="card-header">
							<img src="/assets/img/cssgrid.svg" alt="css grid icon">
						</div>
						<div class="card-body">
							<h2>CSS Grid Generator</h2>
							<p>Generate and export a custom CSS Grid Layout.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="server">
					<a href="/cron" class="card">
						<div class="card-header">
							<img src="/assets/img/schedule.svg" alt="crontab icon">
						</div>
						<div class="card-body">
							<h2>Crontab Generator</h2>
							<p>Generate Cron jobs easily with a visual generator.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="server">
					<a href="/placeholder" class="card">
						<div class="card-header">
							<img src="/assets/img/placeholder.svg" alt="placeholder icon">
						</div>
						<div class="card-body">
							<h2>Image Placeholder</h2>
							<p>Generate custom images to use as placeholders in your designs.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/pattern" class="card">
						<div class="card-header">
							<img src="/assets/img/pattern.svg" alt="pattern icon">
						</div>
						<div class="card-body">
							<h2>CSS Pattern Generator</h2>
							<p>Generate custom CSS background patterns.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="design">
					<a href="/filter" class="card">
						<div class="card-header">
							<img src="/assets/img/filter.svg" alt="filter icon">
						</div>
						<div class="card-body">
							<h2>CSS Image Filter</h2>
							<p>Customize your images with a variety of CSS filters.</p>
						</div>
					</a>
				</div>
				
				<div class="item tiny-12 small-6 medium-4 large-3" data-filter-item="security">
					<a href="/device-info" class="card">
						<div class="card-header">
							<img src="/assets/img/devices.svg" alt="devices icon">
						</div>
						<div class="card-body">
							<h2>Device Information</h2>
							<p>Get information about your device, browser, network and location.</p>
						</div>
					</a>
				</div>
				
			</div>
			
			<?php include('_inc/ad.php'); ?>
		</main>
				
	</div>
</div>

<?php include_once("_inc/footer.php"); ?>