<?php
$title = "Lorem Ipsum Generator";
$description = "Generate random Lorem Ipsum";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	.result {
		line-height: 1.5;
		margin-bottom: 1rem;
	}
	input[type="range"] {
		margin: 0;
	}
</style>

<div class="wrapper" id="lorem-ipsum">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Lorem Ipsum Generator</h1>
					<h2 class="small center">Generate random Lorem Ipsum</h2>
					<hr>
				</div>
			</div>
			<form class="lorem-form">
				<div class="row">
					<div class="tiny-12 medium-8">
					     <label for="numofpara" style="display: inline-block;">Number of paragraphs:</label>
						 <input type="number" min="1" max="20" value="3" id="numofpara" />
						 <input type="range" min="1" max="20" value="3" id="numofparaRange" />
					</div>
					<div class="tiny-12 medium-4 end-medium">
						<button type="submit" id="submit" class="btn">Generate Lorem Ipsum</button>
					</div>
	
				</div>
			</form>
		</section>
		
		<section class="content_block lorem-text" style="display: none;"></section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script>
	const text = [
			`Fugiat qui proident deserunt exercitation officia qui laborum est voluptate duis aute sit. Est reprehenderit qui laboris consectetur est ullamco Lorem officia laborum laboris. Nisi laborum consequat laborum sunt duis cupidatat commodo occaecat ullamco duis ipsum in est. Minim est aute est qui occaecat reprehenderit irure voluptate nulla proident cillum sint eu. Laboris ex officia dolor eiusmod mollit minim cupidatat ipsum dolor consequat esse.`,
			`Nostrud enim Lorem nisi in fugiat excepteur id mollit commodo incididunt aliqua incididunt. Nostrud in nisi nisi veniam cupidatat quis adipisicing officia ut dolor culpa nostrud veniam id. Ullamco labore est aliquip officia laborum ut Lorem cillum nostrud ea est eiusmod aliquip voluptate. Quis laboris id eu aute voluptate excepteur sunt nulla. Pariatur amet officia Lorem do eu qui et aliqua. Tempor pariatur dolor sit dolor dolore.`,
			`Officia id esse ea non. Laboris id ea fugiat do laboris incididunt minim velit laborum consectetur nulla nostrud incididunt. Nulla pariatur sit esse magna et adipisicing ad cupidatat incididunt irure in mollit sunt. Dolore eu occaecat culpa consequat labore laboris adipisicing eu. Eu eu exercitation eu dolor cupidatat deserunt non. Officia sunt duis nulla in nulla officia ad et.`,
			`Reprehenderit ex aute occaecat consectetur nulla dolore in qui commodo aute nostrud est minim. Reprehenderit et irure laboris ex Lorem ullamco magna duis aute reprehenderit sit voluptate esse. Esse mollit id Lorem cupidatat labore do dolore do velit consequat fugiat aliqua.`,
			`In ullamco ea proident esse culpa voluptate in tempor amet. Consequat proident elit pariatur cupidatat quis duis veniam mollit anim aliquip dolor id amet velit. Magna et qui incididunt ad enim minim ex cillum voluptate. Irure cupidatat cillum ipsum sunt. Sint commodo esse labore ex ea irure ut mollit voluptate reprehenderit voluptate elit. Nostrud ut veniam in commodo voluptate amet id do ipsum irure nostrud dolore ad dolore.`,
			`Est duis exercitation mollit laborum ullamco est nostrud pariatur fugiat qui. Excepteur fugiat cupidatat est irure qui laborum magna fugiat ipsum enim. Sunt nostrud tempor pariatur laborum excepteur laborum elit qui esse consectetur ipsum. Labore quis mollit ea reprehenderit nisi laborum Lorem reprehenderit quis qui officia commodo. Exercitation culpa nulla proident cupidatat laboris non dolor aute cupidatat. Sunt ullamco anim magna mollit esse dolore mollit labore adipisicing laborum elit magna velit. Sint ex culpa cillum aliqua ut est Lorem ad dolor nulla qui occaecat eiusmod ex.`,
			`Esse ad commodo dolore anim minim Lorem cupidatat tempor et tempor officia. Reprehenderit culpa minim duis elit reprehenderit ullamco dolor elit elit. Laboris esse minim ullamco consequat laboris eu consectetur magna do dolore cupidatat minim anim. Dolore ut aliqua aute aliquip voluptate deserunt deserunt tempor laborum aliqua reprehenderit. Sit in tempor fugiat anim officia. Aliqua deserunt reprehenderit proident quis.`,
			`Reprehenderit ea veniam pariatur culpa labore nisi labore cillum ea ipsum deserunt ex magna enim. Do excepteur Lorem dolor laboris laborum sint consequat excepteur exercitation eiusmod officia. Exercitation veniam culpa nisi irure consequat officia exercitation. Sit reprehenderit labore non qui nostrud minim voluptate. Cupidatat laborum amet culpa voluptate quis ad. Nisi voluptate reprehenderit culpa dolor ad veniam anim ut minim ad nulla qui ipsum. Ut sit esse quis nisi cupidatat ex ut aliqua aute ullamco eiusmod quis.`,
			`Qui ea sunt laborum et. Consequat aliquip commodo ipsum commodo eu dolore aliqua qui enim Lorem duis ea ut velit. Exercitation ut quis dolore aliqua excepteur. Ex sit officia Lorem deserunt non reprehenderit et laboris. Sunt eiusmod laboris sunt minim exercitation aute dolor mollit magna veniam cupidatat. Pariatur eiusmod nulla cillum quis anim aliquip sit reprehenderit Lorem proident.`,
			`Dolore nulla anim id cillum sit incididunt aliquip. Aute occaecat nulla et consequat Lorem aliquip. Duis sit nisi consectetur do nisi pariatur ipsum adipisicing. Laboris ipsum laboris et reprehenderit excepteur commodo ad consectetur enim pariatur ipsum id id. Ad ex voluptate sunt commodo.`,
			`Labore labore enim sint tempor enim consectetur ea. Minim sit dolore consequat id eu duis in dolor. Duis officia ut sit aliqua fugiat do ex elit fugiat culpa sint excepteur minim laborum. Ipsum tempor eiusmod dolor aliquip tempor anim Lorem occaecat nisi proident.`,
			`Officia commodo est tempor esse sint deserunt fugiat nisi ut nulla nostrud. Ea sint sint voluptate cupidatat fugiat commodo deserunt elit exercitation qui. Reprehenderit ea minim elit magna eu non nulla sit eiusmod est ullamco id.`,
			`Pariatur excepteur ut adipisicing enim nostrud voluptate adipisicing esse. Aliquip consequat reprehenderit enim non quis. Cupidatat nulla exercitation aliqua ex et reprehenderit minim sit amet velit nulla cillum. Adipisicing aliquip nostrud ex enim esse culpa est.`,
			`Officia tempor ut consequat in qui cupidatat irure. Aliqua cillum occaecat culpa ex ullamco aute. Aliquip id culpa cupidatat do laborum magna qui sit consectetur. Proident id excepteur duis id ipsum ullamco officia occaecat dolore id irure. Non irure est officia laboris aute adipisicing ex quis qui est mollit. Voluptate nulla enim sit sint. Nulla laboris laboris duis nostrud irure aliqua dolore officia.`,
			`Eu deserunt adipisicing deserunt ut commodo nulla. In non ut elit amet consequat. Consequat sint laboris incididunt proident do nostrud consequat occaecat ut in magna nostrud. Anim irure ea laboris minim reprehenderit elit minim Lorem.`,
			`In cupidatat ipsum incididunt velit magna incididunt in sunt pariatur qui adipisicing excepteur. Qui elit et sunt laborum aute adipisicing ut aliquip nostrud velit est exercitation aliqua mollit. Velit anim id sint irure ad consequat sint sunt magna dolor. Veniam nisi quis ullamco pariatur id et dolore aliquip tempor et labore fugiat exercitation qui. Consectetur sint officia anim non minim consectetur cupidatat enim. Qui ullamco officia veniam est sit.`,
			`Reprehenderit enim non dolore fugiat nulla. In laborum voluptate id magna aliquip fugiat aliquip consequat aliquip. Magna exercitation Lorem qui deserunt nostrud eu voluptate laboris eu amet quis. Occaecat exercitation ipsum non nisi minim elit aliqua do duis anim reprehenderit pariatur. Irure culpa excepteur pariatur et velit esse in cupidatat veniam sit laborum magna nulla. Nisi eu aliquip cillum aute non non nisi occaecat cillum.`,
			`Aliquip ullamco ullamco nulla qui id amet est ullamco id veniam magna do. Tempor proident velit amet adipisicing nostrud tempor consequat occaecat consequat quis consequat. Eu et Lorem magna cillum. Ut do occaecat non duis sint fugiat ullamco.`,
			`Enim et mollit aliquip laboris. Sunt nisi et labore elit elit exercitation sit commodo veniam duis. Voluptate amet quis eu elit ipsum mollit adipisicing qui eu nostrud. Id laboris aute adipisicing fugiat in.`,
			`Magna officia laboris est sit velit excepteur nulla non occaecat commodo. Dolor incididunt ad labore cupidatat magna ullamco eu. Velit ex voluptate voluptate sint qui. Nisi occaecat veniam do reprehenderit proident ad Lorem commodo consequat excepteur occaecat in minim. Dolore pariatur sunt esse incididunt Lorem cupidatat do. In velit officia adipisicing tempor voluptate aliqua elit reprehenderit commodo sit aute id ipsum.`
		]
		
		const form = document.querySelector(".lorem-form");
		const numofpara = document.getElementById("numofpara");
		const numofparaRange = document.getElementById("numofparaRange");
		const result = document.querySelector(".lorem-text");
		
		function syncParaNumbers(e) {
		  const value = e.target.value;
		  numofpara.value = value;
		  numofparaRange.value = value;
		}
		
		form.addEventListener('submit', e => {
		  e.preventDefault()
		  const value = parseInt(numofpara.value);
		  let tempText = text.slice(0, value);
		  tempText = tempText.map(item => `<p class="result">${item}</p>`).join("");
		  result.innerHTML = tempText;
		  result.style.display = "block";
		})
		
		numofpara.addEventListener('input', syncParaNumbers);
		numofparaRange.addEventListener('input', syncParaNumbers);
		
		document.getElementById('submit').click();
</script>

<?php include_once("../_inc/footer.php"); ?>





