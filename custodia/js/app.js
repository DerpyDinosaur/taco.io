Vue.component('modder', {
	template: '#modder-template'
})

var vm = new Vue({
	el: "#app",
	data: {
		gunData: [
			{
				"name": "AK-74N",
				"img": "AK-74N.png"
			},
			{
				"name": "Colt M4A1",
				"img": "Colt M4A1.png",

				"mods":[
					{ 
						"category": "Pistol Grip",
						"parts":[
							{ "mod": "ADAR 2-15 wooden stock"},
							{ "mod": "Hera Arms CQR pistol grip-stock"},
							{ "mod": "Colt A2 AR-15 pistol grip"},
							{ "mod": "DI ECS FDE pistol grip for AR-15 based systems"},
							{ "mod": "HK 'Battle Grip' pistol grip for AR-15 based systems"},
							{ "mod": "HK Battle Grip with Beavertail pistol grip for AR-15 based systems"},
							{ "mod": "Hogue OverMolded Rubber Grip"},
							{ "mod": "MIAD Pistol grip for AR-15 based systems"},
							{ "mod": "Magpul MOE AR-15 pistol grip"},
							{ "mod": "Naroh Arms GRAL-S Pistol grip for AR-15-compatible weapons"},
							{ "mod": "Stark AR Rifle Grip (black) for AR-15-compatible weapons"},
							{ "mod": "Stark AR Rifle Grip (FDE) for AR-15-compatible weapons"},
							{ "mod": "Skeletonized AR-15 pistol grip"}
						]
					},
					{
						"category": "Magazine",
						"parts":[
							{ "mod": "Colt AR-15 5.56x45 STANAG 30-round magazine"},
							{ "mod": "HK Steel Maritime5 5.56x45 STANAG 30-round magazine"},
							{ "mod": "Magpul PMAG D-60 5.56x45 60-round magazine"},
							{ "mod": "PMAG GEN M3 10 5.56x45 STANAG 10-round magazine"},
							{ "mod": "PMAG GEN M3 20 5.56x45 STANAG 20-round magazine"},
							{ "mod": "PMAG GEN M3 30 5.56x45 STANAG 30-round magazine"},
							{ "mod": "40-round PMAG GEN M3 40 5.56x45 STANAG magazine"},
							{ "mod": "PMAG GEN M3 30 5.56x45 STANAG 30-round magazine (observation slot)"},
							{ "mod": "60-round MAG5-60 5.56x45 STANAG magazine"}
						]
					},
					{
						"category": "Receiver",
						"parts":[
							{ "mod": "Upper receiver ADAR 2-15 5.56x45 for 2-15 assault rifle" },
							{ "mod": "Upper receiver Colt M4A1 5.56x45 for M4A1 assault rifle" },
							{ "mod": "Noveske Gen.3 5.56x45 Upper receiver for AR systems" },
							{ "mod": "Vltor MUR-1S 5.56x45 Upper receiver for AR systems" }
						]
					}
				]
			}
		],
		showModal: false,
		activeGun: "Colt M4A1"
	}
});