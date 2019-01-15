<!-- 
	Ideas:
		Use sprite sheets for images
-->
<!DOCTYPE html>
<html>
<head>
	<title>Taco.io</title>
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
		<h1>Taco Modding</h1>
	</header>
	<div id="takoApp" class="app">
		<div class="gunModal" v-if="showModal">
			<!-- Assault Rifles -->
			<img v-if="showAssault" v-on:click="toggleRifles" src="https://www.eftdb.one/img/Weapon/thumb/M4A1.png">
			<img v-if="showAssault" v-on:click="toggleRifles" src="https://www.eftdb.one/img/Weapon/thumb/AK-74N.png">
			<img v-if="showAssault" v-on:click="toggleRifles" src="https://www.eftdb.one/img/Weapon/thumb/AK-74M.png">
			<!-- <img src="https://www.eftdb.one/img/Weapon/thumb/GLOCK17.png"> -->
		</div>
		<div class="category">
			<p v-on:click="toggleRifles">Assault Rifles</p>
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