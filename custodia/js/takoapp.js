var takoApp = new Vue({
	el: "#takoApp",
	data: {
		showModal: false,
		showAssault: false
	},
	methods: {
		closeModal: function(){
	    	this.showModal = false;
	    	this.showAssault = false;
		},
		assaultModal: function () {
			this.showModal = true;
	    	this.showAssault = true;
	    }
	}
});