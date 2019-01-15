var takoApp = new Vue({
	el: "#takoApp",
	data: {
		showModal: false,
		showAssault: false,
		showPistol: false
	},
	methods: {
		modalToggle: function () {
	    	this.showModal = !this.showModal
	    }
	}
});