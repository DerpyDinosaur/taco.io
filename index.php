<!-- 
	Ideas:
		Use sprite sheets for images
-->
<!DOCTYPE html>
<html>
<head>
	<title>Taco.io</title>
	<link rel="stylesheet" type="text/css" href="custodia/css/style.css">
	<link rel="stylesheet" href="custodia/fontawesome/css/all.css">
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
			<i v-on:click="closeModal" class="fas fa-times"></i>
			<!-- Assault Rifles -->
			<select v-if="showAssault">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="opel">Opel</option>
				<option value="audi">Audi</option>
			</select> 
			<!-- <p v-if="showAssault" v-on:click="closeModal">ADAR 2-15</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-101</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-102</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-103</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-104</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-105</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-74</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-74M</p>
			<p v-if="showAssault" v-on:click="closeModal">AK-74N</p>
			<p v-if="showAssault" v-on:click="closeModal">AKM</p>
			<p v-if="showAssault" v-on:click="closeModal">AKMN</p>
			<p v-if="showAssault" v-on:click="closeModal">AKMS</p>
			<p v-if="showAssault" v-on:click="closeModal">AKMSN</p>
			<p v-if="showAssault" v-on:click="closeModal">AKS-74</p>
			<p v-if="showAssault" v-on:click="closeModal">AKS-74N</p>
			<p v-if="showAssault" v-on:click="closeModal">AKS-74U</p>
			<p v-if="showAssault" v-on:click="closeModal">AKS-74UB</p>
			<p v-if="showAssault" v-on:click="closeModal">AKS-74UN</p>
			<p v-if="showAssault" v-on:click="closeModal">HK 41645</p>
			<p v-if="showAssault" v-on:click="closeModal">M4A1</p>
			<p v-if="showAssault" v-on:click="closeModal">SA-58</p>
			<p v-if="showAssault" v-on:click="closeModal">Vepr AKM/VPO-209</p>
			<p v-if="showAssault" v-on:click="closeModal">Vepr KM/VPO-136</p> -->
			<!-- <img v-if="showAssault" v-on:click="closeModal" src="https://www.eftdb.one/img/Weapon/thumb/M4A1.png">
			<img v-if="showAssault" v-on:click="closeModal" src="https://www.eftdb.one/img/Weapon/thumb/AK-74N.png">
			<img v-if="showAssault" v-on:click="closeModal" src="https://www.eftdb.one/img/Weapon/thumb/AK-74M.png"> -->
			<!-- <img src="https://www.eftdb.one/img/Weapon/thumb/GLOCK17.png"> -->
		</div>
		<div class="category">
			<p v-on:click="assaultModal">Assault Rifles</p>
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