var hpt="http://ceshi.huanlejc.com";
var demo = new Vue({
  el: '#six',
  data: {
  },
  ready: function() {
    this.getCustomers()
  },
  methods:{
    sendPost:function(){
    	axios.post(hpt+"/app/lll/history")
	    .then(function(response){
		    console.log(data);
		})
		.catch(function(error){
		    console.log("错误");
		});
    }
  },
  created:function(){
	this.sendPost()
  }
})



