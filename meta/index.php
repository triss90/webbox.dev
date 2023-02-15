<?php
$title = "Meta Tag Generator";
$description = "Generate correct meta tags to uptimize SEO";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	pre {
		white-space: pre-wrap;
		white-space: -moz-pre-wrap;
		white-space: -pre-wrap;
		white-space: -o-pre-wrap;
		word-wrap: break-word;
	}
	#title-char,
	#description-char {
		color: var(--color-green-3);
		font-weight: bold;
	}
</style>

<div class="wrapper" id="meta">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Meta Tag Generator</h1>
					<h2 class="small center">Generate correct meta tags to uptimize SEO.</h2>
					<hr>
				</div>
			</div>
			
			<form class="form" id="form">
				
				<div class="row">
					<div class="tiny-12">
						<label for="site-title">Site title (Characters available: <span id="title-char">60</span>)</label>
						<input type="text" name="site-title" id="site-title" class="form-control" placeholder="Title must be no more than 60 characters">
					</div>					
				</div>
				
				<div class="row">
					<div class="tiny-12 medium-6">
						<label for="site-description">Site description (Characters available: <span id="description-char">120</span>)</label>
						<textarea name="site-description" id="site-description" cols="20" rows="4" placeholder="Description must be no more than 150 characters"></textarea>
					</div>
					<div class="tiny-12 medium-6">
						<label for="site-keywords">Site keywords</label>
						<textarea name="site-keywords" id="site-keywords" cols="20" rows="4" placeholder="keyword1, keyword2, keyword3"></textarea>
					</div>
				</div>
				
				<div class="row">
					<div class="tiny-12 medium-6">
						<label for="site-robots">Allow robots to index your website?</label>
						<div class="select">
							<select title="Robots" name="site-robots" id="site-robots">
								<option id="site-robots-yes" value="yes">Yes</option>
								<option id="site-robots-no" value="no">No</option>
							</select>
						</div>
					</div>
					<div class="tiny-12 medium-6">
						<label for="site-robots-follow">Allow robots to follow all links?</label>
						<div class="select">
							<select title="Robots" name="site-robots-follow" id="site-robots-follow">
								<option id="site-robots-follow-yes" value="yes">Yes</option>
								<option id="site-robots-follow-no" value="no">No</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="tiny-12 medium-6">
						<label for="site-content">What type of content will your site display?</label>
						<div class="select">
							<select title="site-content" name="site-content" id="site-content">
								<option id="utf-8" value="utf-8">UTF-8</option>
								<option id="utf-16" value="utf-16">UTF-16</option>
								<option id="iso-8859-1" value="iso-8859-1">ISO-8859-1</option>
								<option id="windows-1252" value="windows-1252">WINDOWS-1252</option>
							</select>
						</div>
					</div>
					<div class="tiny-12 medium-6">
						<label for="site-language">What is your site's primary language?</label>
						<div class="select">
							<select title="site-language" name="site-language" id="site-language">
								<option value=af>Afrikaans</option>
								<option value=sq>Albanian</option>
								<option value=am>Amharic</option>
								<option value=ar>Arabic</option>
								<option value=hy>Armenian</option>
								<option value=az>Azerbaijani</option>
								<option value=eu>Basque</option>
								<option value=be>Belarusian</option>
								<option value=bn>Bengali</option>
								<option value=bs>Bosnian</option>
								<option value=bg>Bulgarian</option>
								<option value=ca>Catalan</option>
								<option value=ceb>Cebuano</option>
								<option value=ny>Chichewa</option>
								<option value=zh-CN>Chinese</option>
								<option value=co>Corsican</option>
								<option value=hr>Croatian</option>
								<option value=cs>Czech</option>
								<option value=da>Danish</option>
								<option value=nl>Dutch</option>
								<option value=en selected>English</option>
								<option value=eo>Esperanto</option>
								<option value=et>Estonian</option>
								<option value=tl>Filipino</option>
								<option value=fi>Finnish</option>
								<option value=fr>French</option>
								<option value=fy>Frisian</option>
								<option value=gl>Galician</option>
								<option value=ka>Georgian</option>
								<option value=de>German</option>
								<option value=el>Greek</option>
								<option value=gu>Gujarati</option>
								<option value=ht>Haitian Creole</option>
								<option value=ha>Hausa</option>
								<option value=haw>Hawaiian</option>
								<option value=iw>Hebrew</option>
								<option value=hi>Hindi</option>
								<option value=hmn>Hmong</option>
								<option value=hu>Hungarian</option>
								<option value=is>Icelandic</option>
								<option value=ig>Igbo</option>
								<option value=id>Indonesian</option>
								<option value=ga>Irish</option>
								<option value=it>Italian</option>
								<option value=ja>Japanese</option>
								<option value=jw>Javanese</option>
								<option value=kn>Kannada</option>
								<option value=kk>Kazakh</option>
								<option value=km>Khmer</option>
								<option value=ko>Korean</option>
								<option value=ku>Kurdish (Kurmanji)</option>
								<option value=ky>Kyrgyz</option>
								<option value=lo>Lao</option>
								<option value=la>Latin</option>
								<option value=lv>Latvian</option>
								<option value=lt>Lithuanian</option>
								<option value=lb>Luxembourgish</option>
								<option value=mk>Macedonian</option>
								<option value=mg>Malagasy</option>
								<option value=ms>Malay</option>
								<option value=ml>Malayalam</option>
								<option value=mt>Maltese</option>
								<option value=mi>Maori</option>
								<option value=mr>Marathi</option>
								<option value=mn>Mongolian</option>
								<option value=my>Myanmar (Burmese)</option>
								<option value=ne>Nepali</option>
								<option value=no>Norwegian</option>
								<option value=ps>Pashto</option>
								<option value=fa>Persian</option>
								<option value=pl>Polish</option>
								<option value=pt>Portuguese</option>
								<option value=pa>Punjabi</option>
								<option value=ro>Romanian</option>
								<option value=ru>Russian</option>
								<option value=sm>Samoan</option>
								<option value=gd>Scots Gaelic</option>
								<option value=sr>Serbian</option>
								<option value=st>Sesotho</option>
								<option value=sn>Shona</option>
								<option value=sd>Sindhi</option>
								<option value=si>Sinhala</option>
								<option value=sk>Slovak</option>
								<option value=sl>Slovenian</option>
								<option value=so>Somali</option>
								<option value=es>Spanish</option>
								<option value=su>Sundanese</option>
								<option value=sw>Swahili</option>
								<option value=sv>Swedish</option>
								<option value=tg>Tajik</option>
								<option value=ta>Tamil</option>
								<option value=te>Telugu</option>
								<option value=th>Thai</option>
								<option value=tr>Turkish</option>
								<option value=uk>Ukrainian</option>
								<option value=ur>Urdu</option>
								<option value=uz>Uzbek</option>
								<option value=vi>Vietnamese</option>
								<option value=cy>Welsh</option>
								<option value=xh>Xhosa</option>
								<option value=yi>Yiddish</option>
								<option value=yo>Yoruba</option>
								<option value=zu>Zulu</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="tiny-12 medium-6">
						<label for="site-revisit">Search engines should revisit this page after</label>
						<div class="select">
							<select title="site-revisit" name="site-revisit" id="site-revisit">
								<option id="1 day" value="1 day">1 day</option>
								<option id="2 days" value="2 days">2 days</option>
								<option id="3 days" value="3 days">3 days</option>
								<option id="4 days" value="4 days">4 days</option>
								<option id="5 days" value="5 days">5 days</option>
								<option id="6 days" value="6 days">6 days</option>
								<option id="7 days" value="7 days">7 days</option>
								<option id="8 days" value="8 days">8 days</option>
							</select>
						</div>
					</div>
					<div class="tiny-12 medium-6">
						<div class="tiny-12">
							<label for="site-author">Author</label>
							<input type="text" name="site-author" id="site-author" class="form-control" placeholder="Your name">
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="tiny-12">
						<br>
						<button type="submit" id="submit" class="btn">Generate Meta Data</button>
					</div>
				</div>
				
				<div class="row" id="output-wrapper" style="display: none;>
					<div class="tiny-12">
						<label for="site-output">Meta data</label>
						<textarea name="output" id="output" cols="20" rows="9" placeholder="Output" "></textarea>
					</div>
				</div>
				
			</form>
		</section>
		
		<section class="content_block lorem-text" style="display: none;"></section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script>
	
	// Get elements
	let metaForm = document.getElementById("form"),
		siteTitle = document.getElementById('site-title'),
		siteDescription = document.getElementById('site-description'),
		siteKeywords = document.getElementById('site-keywords'),
		siteRobots = document.getElementById('site-robots'),
		siteRobotsFollow = document.getElementById('site-robots-follow'),
		siteContent = document.getElementById('site-cotent'),
		siteLanguage = document.getElementById('site-language'),
		siteRevisit = document.getElementById('site-revisit'),
		siteAuthor = document.getElementById('site-author'),
		outputWrapper = document.getElementById('output-wrapper'),
		output = document.getElementById('output'),
		charTitle = document.getElementById('title-char'),
		charDescription = document.getElementById('description-char');
	
	metaForm.addEventListener("submit", (e) => {
		e.preventDefault();
		let siteTitleOutput = '<meta name="title" content="'+siteTitle.value+'">',
			siteDescriptionOutput = '<meta name="description" content="'+siteDescription.value+'">',
			siteKeywordsOutput = '<meta name="keywords" content="'+siteKeywords.value+'">',
			siteRobotsOutput = '<meta name="robots" content="'+siteRobots.value+', '+siteRobotsFollow.value+'">',
			siteContentOutput = '<meta http-equiv="Content-Type" content="text/html; charset="'+siteRobots.value+'">',
			siteLanguageOutput = '<meta http-equiv="content-language="'+siteLanguage.value+'">',
			siteRevisitOutput = '<meta name="revisit-after" content="'+siteRevisit.value+'">',
			siteAuthorOutput = '<meta name="author content="'+siteAuthor.value+'">';
		outputWrapper.style.display = 'block';
		output.value = '';
		output.value += siteTitleOutput + '\n';
		output.value += siteDescriptionOutput + '\n';
		output.value += siteKeywordsOutput + '\n';
		output.value += siteRobotsOutput + '\n';
		output.value += siteContentOutput + '\n';
		output.value += siteLanguageOutput + '\n';
		output.value += siteRevisitOutput + '\n';
		output.value += siteAuthorOutput + '\n';
	});
	
	siteTitle.addEventListener('input', (e) => {
		let titleCurrent = siteTitle.value.length+1;
		charTitle.innerHTML = 60-(e.target.value.length);
		if (titleCurrent <= 29) {
			charTitle.style.color = 'var(--color-green-3)';
		} else if (titleCurrent <= 59) {
			charTitle.style.color = 'var(--color-yellow-1)';
		} else if (titleCurrent > 59) {
			charTitle.style.color = 'var(--color-red-1)';
		}
	});
	
	siteDescription.addEventListener('input', (e) => {
		let descriptionCurrent = siteDescription.value.length+1;
		charDescription.innerHTML = 120-(e.target.value.length);
		if (descriptionCurrent <= 99) {
			charDescription.style.color = 'var(--color-green-3)';
		} else if (descriptionCurrent <= 120) {
			charDescription.style.color = 'var(--color-yellow-1)';
		} else if (descriptionCurrent > 120) {
			charDescription.style.color = 'var(--color-red-1)';
		}
	});


</script>

<?php include_once("../_inc/footer.php"); ?>





