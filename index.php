<?php include('_inc/header.php'); ?>

<?php include('_inc/navigation.php'); ?>

<div class="container">

	<div class="row">

        <div class="col">
            <div class="alert alert-dismissible alert-light">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> We do <i><u>not</u></i> log any of your data or track any of your usage on this site. <br>
                The entire project is open source, and can be found on <i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/triss90/webbox.dev" target="_blank" class="alert-link">GitHub</a>.
            </div>
        </div>

    </div>

	<div class="row">

        <div class="col-md-6">
            <div class="card border-danger">
                <div class="card-header"><span class="badge badge-light">sponsored</span></div>
                <div class="card-body ktext-light">
                    <h4 class="card-title"><img src="/assets/img/colordrop.png" style="display: inline-block; width: 32px;" alt=""> ColorDrop</h4>
                    <p class="card-text">Thousands of curated colors, palettes for use in your products.</p>
                    <a href="https://colordrop.io" target="_blank" class="btn btn-outline-secondary">Visit colordrop.io</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-info">security</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-key" aria-hidden="true"></i> Secure Password Generator</h4>
                    <p class="card-text">Generate passwords securely on your device.</p>
                    <a href="/password/" class="btn btn-outline-secondary">Generate Password</a>
                </div>
            </div>
        </div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-success">networking</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-paper-plane" aria-hidden="true"></i> SMTP Test</h4>
					<p class="card-text">Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP "conversation" to help you troubleshoot email issues.</p>
					<a href="/smtp/" class="btn btn-outline-secondary">Test SMTP</a>
				</div>
			</div>
		</div>


        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-primary">programming</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-code" aria-hidden="true"></i> Beautify Code</h4>
                    <p class="card-text">Beautify compressed and obfuscated HTML, CSS and Javascript code.</p>
                    <a href="/beautify/" class="btn btn-outline-secondary">Beautify Code</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-info">security</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-lock" aria-hidden="true"></i> .htpasswd Generator</h4>
                    <p class="card-text">Generate .htpasswd username and password combinations.</p>
                    <a href="/htpasswd/" class="btn btn-outline-secondary">Generate .htpasswd</a>
                </div>
            </div>
        </div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-success">networking</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-globe" aria-hidden="true"></i> DNS Lookup</h4>
					<p class="card-text">Look up DNS records on any domain and monitor changes to records.</p>
					<a href="/dns/" class="btn btn-outline-secondary">Look up DNS</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-danger">graphic</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-paint-brush" aria-hidden="true"></i> Color Converter</h4>
					<p class="card-text">Convert any color code to a number of different formats among which are HEX, RGB, HSV, HSL and CMYK.</p>
					<a href="/color-converter/" class="btn btn-outline-secondary">Convert colors</a>
				</div>
			</div>
		</div>

<!--        <div class="col-md-6">-->
<!--            <div class="card border-dark">-->
<!--                <div class="card-header"><span class="badge badge-info">server</span></div>-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title"><i class="fa fa-terminal" aria-hidden="true"></i> Crontab Generator</h4>-->
<!--                    <p class="card-text">The quick and simple editor for cron schedule expressions.</p>-->
<!--                    <a href="/crontab-generator/" class="btn btn-outline-secondary">Generate Cronjobs</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-primary">programming</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> IDN Converter</h4>
                    <p class="card-text">Convert international domain names or email addresses to ACE/Punycode.</p>
                        <a href="/idn-converter/" class="btn btn-outline-secondary">Convert IDN</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-success">networking</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-globe" aria-hidden="true"></i> Whois</h4>
                    <p class="card-text">Check domain availability and contact information with a simply whois lookup.</p>
                    <a href="/whois/" class="btn btn-outline-secondary">Whois Lookup</a>
                </div>
            </div>
		</div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-info">security</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-life-ring" aria-hidden="true"></i> Leaked Passwords</h4>
                    <p class="card-text">Check if password has been leaked by a known hack</p>
                    <a href="/password/" class="btn btn-outline-secondary">Check Password</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-success">networking</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-crosshairs" aria-hidden="true"></i> HTTP Headers</h4>
                    <p class="card-text">Check HTTP Headers from URL.</p>
                    <a href="/http-headers/" class="btn btn-outline-secondary">Get Headers</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-danger">graphic</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-paint-brush" aria-hidden="true"></i> Placeholder Image</h4>
                    <p class="card-text">Quickly generate and download placeholder images for you project</p>
                    <a href="/image-placeholder/" class="btn btn-outline-secondary">Generate image</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-info">security</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-address-card-o" aria-hidden="true"></i> Identity Generator</h4>
                    <p class="card-text">Generate a fully randomized identity, with name, sex, age and more.</p>
                    <a href="/persona/" class="btn btn-outline-secondary">Create fake identity</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-success">networking</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-random" aria-hidden="true"></i> Port Scanner</h4>
                    <p class="card-text">Check if a port is online or not. Enter a hostname or an IP address and comma separated ports to check those ports status.</p>
                    <a href="/port-scanner/" class="btn btn-outline-secondary">Scan Ports</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-success">networking</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-compress" aria-hidden="true"></i> IP Lookup</h4>
                    <p class="card-text">Check your public IP, location, ISP and more.</p>
                    <a href="/ip/" class="btn btn-outline-secondary">Look up IP</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-danger">graphic</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-picture-o" aria-hidden="true"></i> Image Compression</h4>
                    <p class="card-text">Make your images ready for the internet by compressing them by up to 90%, all without loosing quality.</p>
                    <a href="/image-compression/" class="btn btn-outline-secondary">Compress image</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-info">security</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-user-secret" aria-hidden="true"></i> Encrypt / Descrypt message</h4>
                    <p class="card-text">A free, fast, secure and serverless string encryption.</p>
                    <a href="/encrypt-string/" class="btn btn-outline-secondary">Encrypt/Decrypt String</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header"><span class="badge badge-primary">programming</span></div>
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-paragraph" aria-hidden="true"></i> Markdown Editor</h4>
                    <p class="card-text">Compile and edit markdown. See both HTML and rendered view./p>
                    <a href="/markdown-editor/" class="btn btn-outline-secondary">Compile Markdown</a>
                </div>
            </div>
        </div>

	</div>

</div>

<?php include('_inc/scripts.php'); ?>
<?php include('_inc/footer.php'); ?>
