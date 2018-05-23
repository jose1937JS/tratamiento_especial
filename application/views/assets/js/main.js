var vueinstance = new Vue({
	el : '#app',
	created : function(){
		this.data()
	},
	data : {
		info : null
	},
	methods : {
		data : function(){
			axios.get('http://127.0.0.1/JFLO/6mill/index.php/inicio_controller/data')
			.then(function(res){
				this.info = res.data
			})
		}
	}
});