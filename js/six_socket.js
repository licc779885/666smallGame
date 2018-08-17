function socket_message(data,type){
//	console.log(data)
	switch(type){
		case 'score':
		score_land(data);
		break;
		case 'touzu':
		touzu_cm(data);
		break;
		case 'touzuclear':
		touzu_clear(data);
		break;
		case 'over':
		game_over(data);
		break;
		case 'start':
		game_start(data);
		break;
		case 'welcome':
		welcome(data);
		break;
		default :
		if(type&&data){
		  console.log("ccc");
		}
	}
}

//排行
function score_land(data){
	var playerNum=parseInt(data.person_num);
	var cmLen=data.all.length;
	var html='';
	var playText='';
	var startLeft=$(".six_player").offset().left;
	var startTop=$(".six_player").offset().top;
	var cl=0;
	for(var i=0;i<data.rank.length;i++){
		var money=data.rank[i].money;
		var num=i+1;
		var imgUrl=data.rank[i].img;
		var userName=data.rank[i].nickname;
		html+='<li><div class="xz"><span>下单</span><i></i><span class="money">'+money+'</span></div>';
		html+='<div class="info"><i class="im">N0.'+num+'</i>';
		html+='<div class="user"><img src="'+imgUrl+'"></div>';
		html+='<div class="name">'+userName+'</div>';
		html+='</div>';
		html+='</li>';
	}
	$(".six_rank ul").html(html);
	$(".player_num").text(playerNum);
	//撒筹码
	var spnL=$(".player_list span").length;
	for(cl=0;cl<cmLen;cl++){
		k=data.all[cl].k;
		v=data.all[cl].v;
		var pv=parseInt(v);
		playText+='<span class="'+k+'"></span>';
		$(".six_table .list a."+k).find(".e1").show();
		$(".six_table .list a."+k).find(".e1").text(pv);
		$(".player_list").html(playText);
		console.log(spnL)
	}
	
	
}
////		 endLeft=$(".six_table .list a."+k).offset().left;
//       endTop=$(".six_table .list a."+k).offset().top;
//if(pv>10000){
//			pv="1万+ "
//		}
//		if(pv>20000){
//			pv="2万+ "
//		}
//		if(pv>30000){
//			v="3万+ "
//		}
//		if(pv>40000){
//			pv="4万+ "
//		}
//		if(v>50000){
//			pv="5万+ "
//		}
//		if(v>60000){
//			pv="6万+ "
//		}
//		if(v>70000){
//			pv="7万+ "
//		}
//		if(v>80000){
//			pv="8万+ "
//		}
//		if(v>90000){
//			pv="9万+ "
//		}
//		if(v>100000){
//			pv="10万+ "
//		}
//
//投注
function touzu_cm(data){
	console.log(data);
	var tis=data.info;
	var stu=data.status;
	$(".hint_text").fadeIn(300);
	$(".hint_text .ts").text(tis);
	setTimeout(function(){
		$(".hint_text").fadeOut(300);
	},600);
	if(stu==1){
		$(".six_table .list a").addClass("touz");
	}else if(stu==0){
		$(".six_table .list a").removeClass("touz");
	}
}

//清空投注
function touzu_clear(data){
	console.log(data);
	var tis=data.info;
	var stu=data.status;
	$(".hint_text").fadeIn(300);
	$(".hint_text .ts").text(tis);
	setTimeout(function(){
		$(".hint_text").fadeOut(300);
	},600);
	$(".six_table .list a").find(".e2").hide();
	$(".six_table .list a").find(".e2").text(0);
	stu=1;
}

//结束一期开奖
function game_over(data){
    var hez=data.sum;                   //和值
    var dans=data.dans;                 //单双
    var dax=data.dax;                   //大小
    var join=data.join;                 //是否加入
    var win=data.win;                   //获得金豆数
    if(dans==1){
    	dans="单"
    }else if(dans==2){
    	dans="双"
    }
    if(dax==1){
    	dax="大"
    }else if(dax==2){
    	dax="小"
    }
    console.log(data);
	setTimeout(function(){
		$(".time_text").text("开奖中");
		$(".six_time i").hide();
	},1000);
	var roll=function(){
    	setTimeout(function(){
	    	$(".roll_imt img").attr("src","images/gz_roll.png");
	    	$(".roll_imt").addClass("ani");
	    },350);
    	setTimeout(function(){
	    	$(".tanc_roll .roll_imt.ani img").css({"animation-duration":"0.3s","-webkit-animation-duration":"0.3s"})
	    },2500);
	     setTimeout(function(){
	    	$(".tanc_roll .roll_imt.ani img").css({"animation-duration":"0.4s","-webkit-animation-duration":"0.4s"})
	    },4000);
	      setTimeout(function(){
	    	$(".tanc_roll .roll_imt.ani img").css({"animation-duration":"0.6s","-webkit-animation-duration":"0.6s"})
	    },5500);
	    setTimeout(function(){
	    	$(".tanc_roll .roll_imt").css("top","15%");
	    },7000);
	    setTimeout(function(){
	    	$(".tanc_roll").hide();
	    	$(".tanc_result").show();
	    	var imt=$(".result_top .rt img");
	    	for(var gz=0;gz<data.dices.length;gz++){
		  	  var gzs=data.dices[gz];
		  	  $(imt[gz]).attr("src","images/"+gzs+".png");
		    }
	    	$(".order_total").text("和值："+hez);
	    	$(".order_dans").text(dans);
	    	$(".order_bs").text(dax);
	    },7500);
	    setTimeout(function(){
	    	if(join==0){
	    		$(".result_none").show();
	    	}
	    	if(join==1){
	    		if(win>0){
	    			$(".result_success").show();
	    			$(".result_number .order_tud").text(win);
	    		}else{
	    			$(".result_fail").show();
	    		}
	    	}
	    },7700);
    }
    roll();
   $(".six_table .list a").find(".e1").hide();
	$(".six_table .list a").find(".e1").text(0);
}

//开启一期
function game_start(data){
	$(".six_time i").show();
	$(".time_text").text("42"+'"');
	$(".tanc_result").hide();
	$(".tanc_roll").hide();
	$(".roll_imt img").attr("src","images/gzbx.png");
	$(".roll_imt").removeClass("ani");
	$(".roll_imt").css("top","35%");
	$(".tanc_roll .roll_imt img").css({"animation-duration":"0.2s","-webkit-animation-duration":"0.2s"});
	$(".result_none").hide();
	$(".result_success").hide();
	$(".result_fail").hide();
    welcome(data);
}

//欢迎页面
function welcome(data){
	var times=parseInt(data.over_limit_time);
	var statu=data.status;
	if(statu==1){
		$(".six_table .list a").addClass("touz");
	}
	var d_time=function(){
		times--
		if(times<10){
			times='0'+times;
		}
		if(parseInt(times)<4){
			$(".six_time").addClass("ani");
		}
		$(".time_text").text(times+'"');
		if(parseInt(times)<1){
			clearInterval(count_down);
			$(".six_time i").hide();
			$(".time_text").text("已截止");
			$(".six_time").removeClass("ani");
			$(".six_table .list a").find(".e2").hide();
			$(".six_table .list a").find(".e2").text(0);
			$(".tanc_roll").show();
		}
	}
	var count_down=setInterval(function(){
		d_time()  
	},1000);
}
















