
$(function(){
	
	$(".six_table .list a").addClass("send");
	$(".six_table .list a").find(".e2").text(0);
    $(".six_table .list a.touz").live("click",function(){
    	var addcm = $(this);
    	var myGold=parseInt($(".six_top .money").text());   
		var thisText=parseInt(addcm.find(".e2").text());          //投注筹码金额
		var tWidth=addcm.width();                                 //对应格子的宽
		var tHeight=addcm.height();                               //对应格子的高
		var chip_key=addcm.attr("title");                         //对应格子的标签
		var thisLeft=addcm.offset().left;                         //对应格子的left坐标
        var thisTop=addcm.offset().top;                           //对应格子的top坐标
        var thisWidth=addcm.width();                              //对应格子的宽
        var thisHeight=addcm.height();                            //对应格子的高
    	var my_cm=$(".six_cm .cm_fr li.active");                  //选中投注筹码
    	var bcolor=my_cm.attr("title");                           //选中筹码的颜色
    	var chip_val=my_cm.attr("data-number");                   //选中筹码金额
    	var myaddNum=parseInt(my_cm.attr("data-number"));         //选中筹码金额数字话
		var cm_left=my_cm.offset().left;                          //选中筹码的left坐标
		var cm_top=my_cm.offset().top;                            //选中筹码的top坐标
	    var my_add=my_cm.find("img").clone().appendTo(my_cm);     //投注筹码
	    thisText=thisText+myaddNum;                               //投注筹码金额
	    myGold=myGold-myaddNum;                                   //投注之后金豆数
		
		my_add.addClass("an5");
		my_add.css({"position":"fixed","left":cm_left+20,"top":cm_top+10,"width":"24px","z-index":"999999"});
		setTimeout(function(){
			my_add.css({"left":thisLeft+thisWidth-12,"top":thisTop+thisHeight-12});
		},50)
		setTimeout(function(){
			my_add.remove();
			addcm.find(".e2").show();
			addcm.find(".e2").css("background",'#'+bcolor);
			addcm.find(".e2").text(thisText)
			$(".six_top .money").text(myGold);
		},600)


    })
    
    
    $(".six_table .list a.send").click(function(){
    	var addcm = $(this);
    	var my_cm=$(".six_cm .cm_fr li.active");                  //选中投注筹码
		var chip_key=addcm.attr("title");                         //对应格子的标签
    	var chip_val=my_cm.attr("data-number");                   //选中筹码金额        
    	
		params={}                                                 //开始获取需要发送的信息
		params.chip_key=chip_key;
		params.chip_val=chip_val;
		params.request="lll/touzu";
		params.token="7d774607cf360d94eb1d01a4938a7a3d";
		websocketSend(params);	                                  //发送信息
    });
    
    
    $(".btn_empty").click(function(){
    	var addcm = $(this);
    	var my_cm=$(".six_cm .cm_fr li.active");                  //选中投注筹码
		var chip_key=addcm.attr("title");                         //对应格子的标签
    	var chip_val=my_cm.attr("data-number");   
    	params={}                                                 //开始获取需要发送的信息
		params.chip_key=chip_key;
		params.request="lll/touzuclear";
		params.token="7d774607cf360d94eb1d01a4938a7a3d";
		websocketSend(params);	                                  //发送信息
    });
    
	
	//筹码大小选择
	$(".six_cm li").click(function(){
		var col=$(this).attr("class");
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
	});

	//点击排名显示对应的投注金额
	$(".six_rank li").live("click",function(){
		$(this).find(".xz").fadeIn(300);
		setTimeout(function(){
			$(".xz").fadeOut(300);
		},600)
	});
	//订单显示
	$(".btn_order,.tanc_order .tanc_beij").click(function(){
		if(!$(".tanc_order .order_list").hasClass("bt")){
			$(".tanc_order .tanc_beij").fadeIn(300);
		    $(".tanc_order .order_list").addClass("bt");
		}else{
			$(".tanc_order .tanc_beij").fadeOut(300);
		    $(".tanc_order .order_list").removeClass("bt");
		}
	});
	//规则显示
	$(".btn_rule,.tanc_rule .tanc_beij").click(function(){
		if(!$(".tanc_rule .rule_text").hasClass("bt")){
			$(".tanc_rule .tanc_beij").fadeIn(300);
		    $(".tanc_rule .rule_text").addClass("bt");
		}else{
			$(".tanc_rule .tanc_beij").fadeOut(300);
		    $(".tanc_rule .rule_text").removeClass("bt");
		}
	});
    
    $(".tanc_create .btn_close,.tanc_create .beij").click(function(){
    	$(".tanc_create").hide();
    })
})

















