var takoApp = new Vue({
	el: "#takoApp",
	data: {
		showModal: false,
		showAssault: false,
		showPistol: false
	},
	methods: {
		toggleRifles: function () {
	    	this.showModal = !this.showModal;
	    	this.showAssault = !this.showAssault;
	    }
	}
});