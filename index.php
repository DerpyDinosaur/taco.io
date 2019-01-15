<!-- 
	Ideas:
		Use sprite sheets for images
-->
<!DOCTYPE html>
<html>
<head>
	<title>Tako Modding</title>
	<link rel="stylesheet" type="text/css" href="custodia/css/style.css">
	<script src="custodia/js/vue.js"></script>
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: ['Ubuntu'] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();		
	</script>
</head>
<body>
	<header>
		<h1>Tako Modding</h1>
	</header>
	<div id="takoApp" class="app">
		<div class="category">
			<p>Assault Rifles</p>
			<p>Assault Carbines</p>
			<p>Submachine Guns</p>
			<p>Shotguns</p>
			<p>DMRs</p>
			<p>Sniper Rifles</p>
			<p>Pistols</p>
		</div>
	</div>
	<script src="custodia/js/takoapp.js"></script>
</body>
</html>