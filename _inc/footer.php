<footer id="footer">
	<p>Designed, built, and maintained by <a href="https://triss.dev" target="_blank">Tristan White</a> © <?php echo date("Y"); ?>.</p>
	<p>Suggest a tool or report a bug: <a href="https://github.com/triss90/webbox.dev/issues/new/choose" target="_blank">GitHub Issues</a>.</p>
	<br>
	<div id="badge"></div>
	<script src="https://cdn.jsdelivr.net/npm/co2.observer@1.2.0/badge.min.js"></script>
	<script>
		const myBadge = new Badge({
			target: '#badge',
			key: '425e5e5a59100505494518044548594f585c4f580559435e4f05155f5846175d4f48484552044e4f5c066b01061a041a194d0a696518055c434f5d067e4243590a5d4f4859435e4f0a43590a49464f4b444f580a5e424b440a131f0f',
			logoColor: '#a587ff',
			textColor: '#a587ff',
			borderColor: '#d0bfff',
			backgroundColor: '#f9f9fd'
		});
		myBadge.init();
	</script>
</footer>				
<script src="/assets/js/app.js"></script>
<script src="/assets/js/clipboard.js"></script>
</body>
</html>
