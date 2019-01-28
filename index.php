<!-- 
	Ideas:
		Use sprite sheets for images.
		Create C program that takes all information off the tarkov website and makes JSON files for weapon modding.
-->
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title>Taco.io</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
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

		function loaded(){
			document.documentElement.className = "pageLoaded";
		}
	</script>
</head>
<body onload="loaded()">
	<header>
		<h1>Taco Modding</h1>
	</header>
	<!------->
	<div id="app" class="appWrap">
		<transition name="modal">
			<div v-if="showModal" class="gunModalWrap">
				<div class="gunModal">
					<i v-on:click="showModal=false" class="fas fa-times"></i>
					<div class="gunImageWrap" v-for="item in gunData">
						<img v-on:click="activeGun=item.name;showModal=false" v-bind:src="'custodia/img/' + item.img" />
						<p>{{item.name}}</p>
					</div>
				</div>
			</div>
		</transition>
		<!------->
		<div class="category">
			<submit class="button" v-on:click="showModal=true">Assault Rifles</submit>
			<submit class="button" >Close Quarters</submit>
			<submit class="button" >Marksman Rifles</submit>
			<submit class="button" >Pistols</submit>
		</div>
		<!------->
		<div class="modWrap">
			<img v-bind:src="'custodia/img/' + activeGun + '.png'" />
			<p>{{ activeGun }}</p>
			<div v-for="gun in gunData">
				<div v-if="gun.name = activeGun" v-for="cat in gun.mods">
					<p class="button">{{ cat.category }}</p>
					<div v-for="part in cat.parts">
						<h5>{{ part.mod }}</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="custodia/js/app.js"></script>
</body>
</html>