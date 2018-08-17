<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<meta name = "format-detection" content="telephone = no" />
		<title></title>
		<link type="text/css" href="/html/games/lll/css/Xcompany.css" rel="stylesheet" />
		<link type="text/css" href="/html/games/lll/css/game.css" rel="stylesheet" />
		<link type="text/css" href="/html/games/lll/css/swiper.css" rel="stylesheet" />
		<script type="text/javascript" src="/html/games/lll/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/swiper.min.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/font.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/style.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/jquery.fly.min.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/webSocket.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/six_socket.js"></script>
		
	</head>
	<body>
		<div class="six" id="six">
			<div class="six_beij"><img src="/html/games/lll/images/table.png"></div>
			<!--倒计时-->
			<div class="six_time"><i></i><span class="time_text"></span></div>
			<!--投币人数-->
			<div class="six_player">
				<div class="player_beij"><img src="/html/games/lll/images/icon5.png"><span class="player_num">999</span></div>
				<div class="player_list"></div>
			</div>
			<!--头部-->
			<div class="six_top ov">
				<div class="fl top_fl"><i></i><span class="money">20000</span><a href="javascript:;" class="btn_add"></a></div>
				<div class="fr top_fr"><a href="javascript:;" class="btn_order">订单</a><span class="line">|</span><a href="javascript:;" class="btn_rule">规则</a></div>
			</div>
			<!--排名-->
			<div class="six_rank">
				<ul>
					<li>
						<div class="xz"><span>下单</span><i></i><span class="money">20000</span></div>
						<div class="info">
							<i class="im">N0.1</i>
							<div class="user"><img src="/html/games/lll/images/user_img.png"></div>
							<div class="name">你***猜</div>
						</div>
					</li>
					<li>
						<div class="xz"><span>下单</span><i></i><span class="money">20000</span></div>
						<div class="info">
							<i class="im">N0.2</i>
							<div class="user"><img src="/html/games/lll/images/user_img.png"></div>
							<div class="name">你***猜</div>
						</div>
					</li>
					<li>
						<div class="xz"><span>下单</span><i></i><span class="money">20000</span></div>
						<div class="info">
							<i class="im">N0.3</i>
							<div class="user"><img src="/html/games/lll/images/user_img.png"></div>
							<div class="name">你***猜</div>
						</div>
					</li>
					<li>
						<div class="xz"><span>下单</span><i></i><span class="money">20000</span></div>
						<div class="info">
							<i class="im">N0.4</i>
							<div class="user"><img src="/html/games/lll/images/user_img.png"></div>
							<div class="name">你***猜</div>
						</div>
					</li>
					<li>
						<div class="xz"><span>下单</span><i></i><span class="money">20000</span></div>
						<div class="info">
							<i class="im">N0.5</i>
							<div class="user"><img src="/html/games/lll/images/user_img.png"></div>
							<div class="name">你***猜</div>
						</div>
					</li>
				</ul>
			</div>
			<!--往期开奖-->
			<div class="six_history ov">
				<div class="fl history_fl"><i><img src="/html/games/lll/images/icon9.png"></i>往<br>期<br>开<br>奖</div>
				<div class="fr history_fr">
					<ul class="ov">
						<li class="active"><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li class="active"><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li class="on"><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li class="ot"><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon6.png"></i>
							<span class="spn ce8">13</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
						<li><a href="javascript:;">
							<i><img src="/html/games/lll/images/icon7.png"></i>
							<span class="spn c16">16</span>
							<div class="gz">
								<img src="/html/games/lll/images/gzs1.png" class="im1">
								<img src="/html/games/lll/images/gzs2.png" class="im2">
								<img src="/html/games/lll/images/gzs3.png" class="im3">
							</div>
						</a></li>
					</ul>
				</div>
			</div>
			<!--筹码-->
			<div class="six_cm ov">
				<div class="fl cm_fl"><a href="javascript:;" class="btn_empty"><img src="/html/games/lll/images/btn_empty.png"></a></div>
				<div class="fr cm_fr">
					<ul class="ov">
						<li class="active t20" data-number="20" title="9a58d4"><img src="/html/games/lll/images/cm1.png"></li>
						<li class="t100" data-number="100" title="06a4e1"><img src="/html/games/lll/images/cm2.png"></li>
						<li class="t500" data-number="500" title="35e79c"><img src="/html/games/lll/images/cm3.png"></li>
						<li class="t1000" data-number="1000" title="fbbe05"><img src="/html/games/lll/images/cm4.png"></li>
						<li class="t1500" data-number="1500" title="fe7800"><img src="/html/games/lll/images/cm5.png"></li>
					</ul>
				</div>
			</div>
			<!--充值界面-->
			<div class="tanc tanc_create" style="display: none;">
				<div class="beij"></div>
				<div class="text">
					<div class="btn_close"></div>
					<div class="text_title"><img src="/html/games/lll/images/img_title.png"></div>
					<div class="text_name">选中金豆场</div>
					<div class="text_box">
						<div class="in_line">
							<div class="scroll_content">
								<ul>
									<li><a href="javascript:;">
										<div class="fl ov">
											<img src="/html/games/lll/images/money_gold.png">
											<h3 class="name">100金豆场</h3>
										</div>
										<button>选中</button>
									</a></li>
									<li><a href="javascript:;">
										<div class="fl ov">
											<img src="/html/games/lll/images/money_gold.png">
											<h3 class="name">100金豆场</h3>
										</div>
										<button>选中</button>
									</a></li>
									<li><a href="javascript:;">
										<div class="fl ov">
											<img src="/html/games/lll/images/money_gold.png">
											<h3 class="name">100金豆场</h3>
										</div>
										<button>选中</button>
									</a></li>
								</ul>
							</div>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<!---->
			<!--桌面-->
			<div class="six_table">
				<div class="swiper-container">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
			            	<div class="table1">
			            		<div class="t1 ov">
			            			<h3 class="title">和值1.9倍</h3>
			            			<div class="list">
			            				<a href="javascript:;" class="active gj1" title="dans_1"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/img1.png"></a>
			            				<a href="javascript:;" class="active gj2" title="dans_2"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/img2.png"></a>
			            				<a href="javascript:;" class="lt_big gj3" title="dax_1">
			            					<em class="e1"></em><em class="e2"></em>
			            					<img src="/html/games/lll/images/img3.png">
			            					<i class="tm"></i>
			            				</a>
			            				<a href="javascript:;" class="lt_small gj4" title="dax_2">
			            					<em class="e1"></em><em class="e2"></em>
			            					<img src="/html/games/lll/images/img4.png">
			            					<i class="tm"></i>
			            				</a>
			            			</div>
			            		</div>
			            		<div class="t2 ov">
			            			<h3 class="title">点数 出现1个号码得2倍，2个得3倍，3个得4倍</h3>
			            			<div class="list">
			            				<a href="javascript:;" class="gj5" title="dians_1"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz1.png"></a>
			            				<a href="javascript:;" class="gj6" title="dians_2"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz2.png"></a>
			            				<a href="javascript:;" class="gj7" title="dians_3"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz3.png"></a>
			            				<a href="javascript:;" class="gj8" title="dians_4"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz4.png"></a>
			            				<a href="javascript:;" class="gj9" title="dians_5"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz5.png"></a>
			            				<a href="javascript:;" class="gj10" title="dians_6"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gz6.png"></a>
			            			</div>
			            		</div>
			            		<div class="t3 ov">
			            			<h3 class="title">和值</h3>
			            			<div class="list">
			            				<div class="lt lt1">
			            					<a href="javascript:;" class="gj11" title="hez_3">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<p><strong class="stn">3</strong></p>
			            							<p><span class="spn">150倍</span></p>
			            						</div>
			            						<div class="add_oneHundred"><em></em><img src="/html/games/lll/images/icon2.png"></div>
			            					</a>
			            					<a href="javascript:;" class="gj12" title="hez_4">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">4</strong></P>
			            							<P><span class="spn">50倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj13" title="hez_5">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">5</strong></P>
			            						    <p><span class="spn">25倍</span></p>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj14" title="hez_6">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<p><strong class="stn">6</strong></p>
			            						    <P><span class="spn">15倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj15" title="hez_7">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">7</strong></P>
			            						    <P><span class="spn">12倍</span></P>
			            						</div>
			            						<div class="add_oneHundred"><em></em><img src="/html/games/lll/images/icon2.png"></div>
			            					</a>
			            				</div>
			            				<div class="lt lt2">
			            					<a href="javascript:;" class="gj16" title="hez_8">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">8</strong></P>
			            							<p><span class="spn">12倍</span></p>
			            						</div>
			            						<div class="add_oneHundred"><em></em><img src="/html/games/lll/images/icon2.png"></div>
			            					</a>
			            					<a href="javascript:;" class="gj17" title="hez_9">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">9</strong></P>
			            							<P><span class="spn">6倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj18" title="hez_10">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">10</strong></P>
			            							<P><span class="spn">6倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj19" title="hez_11">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">11</strong></P>
			            							<P><span class="spn">8倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj20" title="hez_12">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">12</strong></P>
			            							<P><span class="spn">6倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj21" title="hez_13">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">13</strong></P>
			            							<P><span class="spn">8倍</span></P>
			            						</div>
			            					</a>
			            				</div>
			            				<div class="lt lt3">
			            					<a href="javascript:;" class="gj22" title="hez_14">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">14</strong></P>
			            							<P><span class="spn">12倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj23" title="hez_15">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">15</strong></P>
			            							<P><span class="spn">15倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj24" title="hez_16">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">16</strong></P>
			            							<P><span class="spn">25倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj25" title="hez_17">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">17</strong></P>
			            							<P><span class="spn">15倍</span></P>
			            						</div>
			            					</a>
			            					<a href="javascript:;" class="gj26" title="hez_18">
			            						<em class="e1"></em><em class="e2"></em>
			            						<div class="money">
			            							<P><strong class="stn">18</strong></P>
			            							<P><span class="spn">12倍</span></P>
			            						</div>
			            					</a>
			            				</div>
			            			</div>
			            		</div>
			            		<div class="t4 ov">
			            			<h3 class="title">三同号150倍，通选24倍</h3>
			            			<div class="list">
			            				<div class="lt lt1">
			            					<a href="javascript:;" class="gj27" title="santh_1"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm1.png"></a>
			            					<a href="javascript:;" class="gj28" title="santh_2"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm2.png"></a>
			            					<a href="javascript:;" class="gj29" title="santh_3"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm3.png"></a>
			            					<a href="javascript:;" class="gj30" title="santh_4"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm4.png"></a>
			            					<a href="javascript:;" class="gj31" title="santh_5"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm5.png"></a>
			            					<a href="javascript:;" class="gj32" title="santh_6"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm6.png"></a>
			            				</div>
			            			</div>
			            			<div class="list">
			            				<div class="lt lt2"><a href="javascript:;" class="gj33" title="tongx_"><em class="e1"></em><em class="e2"></em><img src="/html/games/lll/images/gm7.png"></a></div>
			            			</div>
			            		</div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<div class="table2">
			            		<div class="t1 ov">
			            			<h3 class="title">两同号 10倍</h3>
			            			<div class="list">
			            				<a href="javascript:;" class="gj34" title="liangth_1"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i1"></i></span></a>
			            				<a href="javascript:;" class="gj35" title="liangth_2"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i2"></i><i class="i2"></i></span></a>
			            				<a href="javascript:;" class="gj36" title="liangth_3"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i3"></i><i class="i3"></i></span></a>
			            				<a href="javascript:;" class="gj37" title="liangth_4"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i4"></i><i class="i4"></i></span></a>
			            				<a href="javascript:;" class="gj38" title="liangth_5"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i5"></i><i class="i5"></i></span></a>
			            				<a href="javascript:;" class="gj39" title="liangth_6"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i6"></i><i class="i6"></i></span></a>
			            			</div>
			            		</div>
			            		<div class="t2 ov">
			            			<h3 class="title">两不同号 5倍</h3>
			            			<div class="list">
			            				<div class="lt">
			            					<a href="javascript:;" class="gj40" title="liangbt_1"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i2"></i></span></a>
				            				<a href="javascript:;" class="gj41" title="liangbt_2"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i3"></i></span></a>
				            				<a href="javascript:;" class="gj42" title="liangbt_3"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i4"></i></span></a>
				            				<a href="javascript:;" class="gj43" title="liangbt_4"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i5"></i></span></a>
				            				<a href="javascript:;" class="gj44" title="liangbt_5"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i1"></i><i class="i6"></i></span></a>
			            				</div>
			            				<div class="lt">
			            					<a href="javascript:;" class="gj45" title="liangbt_6"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i2"></i><i class="i3"></i></span></a>
				            				<a href="javascript:;" class="gj46" title="liangbt_7"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i2"></i><i class="i4"></i></span></a>
				            				<a href="javascript:;" class="gj47" title="liangbt_8"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i2"></i><i class="i5"></i></span></a>
				            				<a href="javascript:;" class="gj48" title="liangbt_9"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i2"></i><i class="i6"></i></span></a>
				            				<a href="javascript:;" class="gj49" title="liangbt_10"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i3"></i><i class="i4"></i></span></a>
			            				</div>
			            				<div class="lt">
			            					<a href="javascript:;" class="gj50" title="liangbt_11"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i3"></i><i class="i5"></i></span></a>
				            				<a href="javascript:;" class="gj51" title="liangbt_12"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i3"></i><i class="i6"></i></span></a>
				            				<a href="javascript:;" class="gj52" title="liangbt_13"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i4"></i><i class="i5"></i></span></a>
				            				<a href="javascript:;" class="gj53" title="liangbt_14"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i4"></i><i class="i6"></i></span></a>
				            				<a href="javascript:;" class="gj54" title="liangbt_15"><em class="e1"></em><em class="e2"></em><span class="gz"><i class="i5"></i><i class="i6"></i></span></a>
			            				</div>
			            			</div>
			            		</div>
			            		<div class="t3 ov">
			            			<h3 class="title">直选 25倍</h3>
			            			<div class="list lt1">
			            				<div class="lt">
			            					<a href="javascript:;" class="gj55" title="zhix_1"><em class="e1"></em><em class="e2"></em><strong class="stn">123</strong></a>
			            					<a href="javascript:;" class="gj56" title="zhix_2"><em class="e1"></em><em class="e2"></em><strong class="stn">124</strong></a>
			            					<a href="javascript:;" class="gj57" title="zhix_3"><em class="e1"></em><em class="e2"></em><strong class="stn">125</strong></a>
			            					<a href="javascript:;" class="gj58" title="zhix_4"><em class="e1"></em><em class="e2"></em><strong class="stn">126</strong></a>
			            					<a href="javascript:;" class="gj59" title="zhix_5"><em class="e1"></em><em class="e2"></em><strong class="stn">134</strong></a>
			            					<a href="javascript:;" class="gj60" title="zhix_6"><em class="e1"></em><em class="e2"></em><strong class="stn">135</strong></a>
			            				</div>
			            				<div class="lt">
			            					<a href="javascript:;" class="gj61" title="zhix_7"><em class="e1"></em><em class="e2"></em><strong class="stn">136</strong></a>
			            					<a href="javascript:;" class="gj62" title="zhix_8"><em class="e1"></em><em class="e2"></em><strong class="stn">145</strong></a>
			            					<a href="javascript:;" class="gj63" title="zhix_9"><em class="e1"></em><em class="e2"></em><strong class="stn">146</strong></a>
			            					<a href="javascript:;" class="gj64" title="zhix_10"><em class="e1"></em><em class="e2"></em><strong class="stn">156</strong></a>
			            					<a href="javascript:;" class="gj65" title="zhix_11"><em class="e1"></em><em class="e2"></em><strong class="stn">234</strong></a>
			            					<a href="javascript:;" class="gj66" title="zhix_12"><em class="e1"></em><em class="e2"></em><strong class="stn">235</strong></a>
			            				</div>
			            			</div>
			            			<div class="list lt2">
			            				<div class="lt">
			            					<a href="javascript:;" class="gj67" title="zhix_13"><em class="e1"></em><em class="e2"></em><strong class="stn">145</strong></a>
			            					<a href="javascript:;" class="gj68" title="zhix_14"><em class="e1"></em><em class="e2"></em><strong class="stn">146</strong></a>
			            					<a href="javascript:;" class="gj69" title="zhix_15"><em class="e1"></em><em class="e2"></em><strong class="stn">156</strong></a>
			            					<a href="javascript:;" class="gj70" title="zhix_15"><em class="e1"></em><em class="e2"></em><strong class="stn">234</strong></a>
			            					<a href="javascript:;" class="gj71" title="zhix_16"><em class="e1"></em><em class="e2"></em><strong class="stn">235</strong></a>
			            				</div>
			            			</div>
			            			<div class="list lt3">
			            				<div class="lt">
			            					<a href="javascript:;" class="gj72" title="zhix_17"><em class="e1"></em><em class="e2"></em><strong class="stn">346</strong></a>
			            					<a href="javascript:;" class="gj73" title="zhix_18"><em class="e1"></em><em class="e2"></em><strong class="stn">356</strong></a>
			            					<a href="javascript:;" class="gj74" title="zhix_19"><em class="e1"></em><em class="e2"></em><strong class="stn">456</strong></a>
			            				</div>
			            			</div>
			            		</div>
			            	</div>
			            </div>
			            <div class="swiper-slide">
			            	<div class="table3">
			            		<h3 class="title">对子直选50倍</h3>
			            		<div class="list">
			            			<ul>
			            				<li><a href="javascript:;" class="gj75" title="duizzx_1"><em class="e1"></em><em class="e2"></em><strong class="stn">112</strong></a></li>
			            				<li><a href="javascript:;" class="gj76" title="duizzx_2"><em class="e1"></em><em class="e2"></em><strong class="stn">221</strong></a></li>
			            				<li><a href="javascript:;" class="gj77" title="duizzx_3"><em class="e1"></em><em class="e2"></em><strong class="stn">331</strong></a></li>
			            				<li><a href="javascript:;" class="gj78" title="duizzx_4"><em class="e1"></em><em class="e2"></em><strong class="stn">113</strong></a></li>
			            				<li><a href="javascript:;" class="gj79" title="duizzx_5"><em class="e1"></em><em class="e2"></em><strong class="stn">223</strong></a></li>
			            				<li><a href="javascript:;" class="gj80" title="duizzx_6"><em class="e1"></em><em class="e2"></em><strong class="stn">332</strong></a></li>
			            				<li><a href="javascript:;" class="gj81" title="duizzx_7"><em class="e1"></em><em class="e2"></em><strong class="stn">114</strong></a></li>
			            				<li><a href="javascript:;" class="gj82" title="duizzx_8"><em class="e1"></em><em class="e2"></em><strong class="stn">224</strong></a></li>
			            				<li><a href="javascript:;" class="gj83" title="duizzx_9"><em class="e1"></em><em class="e2"></em><strong class="stn">334</strong></a></li>
			            				<li><a href="javascript:;" class="gj84" title="duizzx_10"><em class="e1"></em><em class="e2"></em><strong class="stn">115</strong></a></li>
			            				<li><a href="javascript:;" class="gj85" title="duizzx_11"><em class="e1"></em><em class="e2"></em><strong class="stn">225</strong></a></li>
			            				<li><a href="javascript:;" class="gj86" title="duizzx_12"><em class="e1"></em><em class="e2"></em><strong class="stn">335</strong></a></li>
			            				<li><a href="javascript:;" class="gj87" title="duizzx_13"><em class="e1"></em><em class="e2"></em><strong class="stn">116</strong></a></li>
			            				<li><a href="javascript:;" class="gj88" title="duizzx_14"><em class="e1"></em><em class="e2"></em><strong class="stn">226</strong></a></li>
			            				<li><a href="javascript:;" class="gj89" title="duizzx_15"><em class="e1"></em><em class="e2"></em><strong class="stn">336</strong></a></li>
			            				<li><a href="javascript:;" class="gj90" title="duizzx_16"><em class="e1"></em><em class="e2"></em><strong class="stn">441</strong></a></li>
			            				<li><a href="javascript:;" class="gj91" title="duizzx_17"><em class="e1"></em><em class="e2"></em><strong class="stn">551</strong></a></li>
			            				<li><a href="javascript:;" class="gj92" title="duizzx_18"><em class="e1"></em><em class="e2"></em><strong class="stn">661</strong></a></li>
			            				<li><a href="javascript:;" class="gj93" title="duizzx_19"><em class="e1"></em><em class="e2"></em><strong class="stn">442</strong></a></li>
			            				<li><a href="javascript:;" class="gj94" title="duizzx_20"><em class="e1"></em><em class="e2"></em><strong class="stn">552</strong></a></li>
			            				<li><a href="javascript:;" class="gj95" title="duizzx_21"><em class="e1"></em><em class="e2"></em><strong class="stn">662</strong></a></li>
			            				<li><a href="javascript:;" class="gj96" title="duizzx_22"><em class="e1"></em><em class="e2"></em><strong class="stn">443</strong></a></li>
			            				<li><a href="javascript:;" class="gj97" title="duizzx_23"><em class="e1"></em><em class="e2"></em><strong class="stn">553</strong></a></li>
			            				<li><a href="javascript:;" class="gj98" title="duizzx_24"><em class="e1"></em><em class="e2"></em><strong class="stn">663</strong></a></li>
			            				<li><a href="javascript:;" class="gj99" title="duizzx_25"><em class="e1"></em><em class="e2"></em><strong class="stn">445</strong></a></li>
			            				<li><a href="javascript:;" class="gj100" title="duizzx_26"><em class="e1"></em><em class="e2"></em><strong class="stn">554</strong></a></li>
			            				<li><a href="javascript:;" class="gj101" title="duizzx_27"><em class="e1"></em><em class="e2"></em><strong class="stn">664</strong></a></li>
			            				<li><a href="javascript:;" class="gj102" title="duizzx_28"><em class="e1"></em><em class="e2"></em><strong class="stn">446</strong></a></li>
			            				<li><a href="javascript:;" class="gj103" title="duizzx_29"><em class="e1"></em><em class="e2"></em><strong class="stn">556</strong></a></li>
			            				<li><a href="javascript:;" class="gj104" title="duizzx_30"><em class="e1"></em><em class="e2"></em><strong class="stn">665</strong></a></li>
			            			</ul>
			            		</div>
			            	</div>
			            </div>
			        </div>
			        <div class="swiper-button-next"><img src="/html/games/lll/images/btn_page.png"></div>
			    </div>
			</div>
		</div>
		<!--提示弹窗-->
		<div class="hint_text"><span class="ts"></span></div>
		<!--骰子旋转效果-->
		<div class="tanc tanc_roll" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="roll_imt"><img src="/html/games/lll/images/gzbx.png"><img src="/html/games/lll/images/gzbx.png"><img src="/html/games/lll/images/gzbx.png"></div>
		</div>
		<!--开奖结果-->
		<div class="tanc tanc_result" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="result">
				<div class="result_top">
					<div class="rt"><img src=""><img src=""><img src=""></div>
					<div class="rd"><span class="order_total">和值12</span>, <span class="order_dans">双</span>，<span class="order_bs">大</span></div>
				</div>
				<!--未参与-->
				<div class="result_none" style="display: none;">
					<div class="result_number cfe">今日已有<span class="number">XXXXX</span>人中奖</div>
					<div class="btn"><a href="javascript:;"><img src="/html/games/lll/images/btn_go1.png"></a></div>
				</div>
				<!--中奖-->
				<div class="result_success" style="display: none;">
					<div class="imt"><img src="/html/games/lll/images/success.png"></div>
					<div class="result_number cfe">中<strong class="order_tud">38</strong>豆</div>
					<div class="btn"><a href="javascript:;"><img src="/html/games/lll/images/btn_again.png"></a></div>
				</div>
				<!--未中奖-->
				<div class="result_fail" style="display: none;">
					<div class="imt"><img src="/html/games/lll/images/error.png"></div>
					<div class="result_number cfe">今日已有<span class="number">XXXXX</span>人中奖</div>
					<div class="btn"><a href="javascript:;"><img src="/html/games/lll/images/btn_again.png"></a></div>
				</div>
				<div class="result_hint"><span class="cfe ts">小贴士</span><span class="num_gold">XXX</span>豆可兑换<span class="num_money"></span>元<span class="num_card">话费卡</span><a href="javascript:;"><img src="/html/games/lll/images/btn_look.png"></a></div>
			</div>
		</div>
		
		<!--列表-->
		<div class="tanc tanc_list" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="list">
				<ul>
					<li><span class="state">两不同号 </span><span class="num">13</span><span class="cfe">加100%</span></li>
					<li><span class="state">两不同号 </span><span class="num">35</span><span class="cfe">加100%</span></li>
					<li><span class="state">对子直选 </span><span class="num">441</span><span class="cfe">加100%</span></li>
					<li><span class="state">对子直选 </span><span class="num">554</span><span class="cfe">加100%</span></li>
					<li><span class="state">对子直选 </span><span class="num">662</span><span class="cfe">加100%</span></li>
				</ul>
			</div>
		</div>
		<!--账号已在其它设备登陆弹窗-->
		<div class="tanc tanc_other" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="tanc_tx">
			  <div class="tanc_line">
			  	<h3 class="title">该账号已在其他设备上进行此游戏，请确认后重试！</h3>
			    <div class="btn"><a href="javascript:;"><img src="/html/games/lll/images/btn_ok.png"></a></div>
			  </div>
			</div>
		</div>
		<!--是否继续弹窗-->
		<div class="tanc tanc_continue" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="tanc_tx">
			  <div class="tanc_line">
			  	<h3 class="title">您之前参与的猜拳仍在进行中，是否继续？</h3>
			    <div class="btn">
			    	<a href="javascript:;"><img src="/html/games/lll/images/btn_a2.png"></a>
			    	<a href="javascript:;"><img src="/html/games/lll/images/btn_a1.png"></a>
			    </div>
			  </div>
			</div>
		</div>
		<!--网络链接错误弹窗-->
		<div class="tanc tanc_error" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="tanc_tx">
			  <div class="tanc_line">
			  	<h3 class="title">网络链接有点问题，请刷新</h3>
			    <div class="btn">
			    	<a href="javascript:;"><img src="/html/games/lll/images/btn_refresh.png"></a>
			    </div>
			  </div>
			</div>
		</div>
		<!--网络不好弹窗-->
		<div class="tanc tanc_cuow" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="tanc_tx">
			  <div class="tanc_line">
			  	<h3 class="title">网络可能不好哦，请重试</h3>
			    <div class="btn">
			    	<a href="javascript:;"><img src="/html/games/lll/images/btn_go.png"></a>
			    	<a href="javascript:;"><img src="/html/games/lll/images/btn_wait.png"></a>
			    </div>
			  </div>
			</div>
		</div>
		<!--额外奖励弹窗-->
		<div class="tanc tanc_reward" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="reward_imt"><img src="/html/games/lll/images/beij5.png"></div>
		</div>
		<!--游戏初始化弹窗-->
		<div class="tanc tanc_network" style="display: none;">
			<div class="tanc_beij"></div>
			<div class="network_imt">
				<img src="/html/games/lll/images/icon10.png">
				<div class="imt_text">无法连接到网络</div>
			</div>
		</div>
		
		<!--游戏规则弹窗-->
		<div class="tanc tanc_rule">
			<div class="tanc_beij"></div>
			<div class="rule_text">
				<div class="rule_imt"><img src="/html/games/lll/images/ruile_imt.png"></div>
				<div class="rule_info">
					<h3 class="title">详细规则</h3>
					<P>获赠金豆数为用户所投入金豆的数量与倍数的乘积，具体倍数以用户参与竟猜时下单成功页面展示的为准。（投入金豆数*倍数=赠送金豆的数量）用户猜中以上任意状态，则可获赠对应投入金豆数n倍(n大于1,如1.2倍)的金豆。</P>
					<P>1、每轮活动开始后,用户就三个数字的不同玩法组合进行竞猜，每个竞猜数字为1-6共六个自然数中的任意一个,并选择要投入的金豆数量。</P>
					<P>2、根据不同的数字组合,本活动共分为“和值”、“和值单双”、“点数”“三同号”、“三同通选”、“两不同号”、“两同号”、“直选”、“对子直选”等玩法,具体如下</P>
					<P>（1）和值：猜三个数字之和的值</P>
					<P>（2）和值单双：猜三个数字之和为单数或双数</P>
					<P>（3）点数：猜出现的三个数字中含有1-6中的某个数字,只要结果中有该数字,即算猜对</P>
					<P>（4）三同号：猜出现的数字为三个相同的1-6中的某个数字，如猜“111",只有当出现的结果是“111”时才算猜对</P>
					<P>（5）三同通选：猜是任意三个相同的数字,只要开出的是“111”、“222”、“333”、“444”、“555”或“666”中的一个就算猜对</P>
					<P>（6）两不同号：猜出现的三个数字中含有1-6中的某两个具体数字,如猜含有“2、3”或“1、5”,只有出现的数字中含有所猜的两个数字,才算猜对</P>
					<P>（7）两同号：猜出现的三个数字中有两个相同的1-6中的某个数字</P>
					<P>（8）直选：猜三个不同数字的固定组合,如猜“345”,则只有当结果是“345”时才算猜对</P>
					<P>（9）对子直选：猜两个相同数字和一个不同数字的固定组合,如猜结果为“113”,则只有当出现数字是“113”时才算猜对</P>
					<P>3、每轮活动结束后,系统会随机增加部分选项的奖励额度，具体以页面显示为准。</P>
					<P>4、用户在竞猜选项上填写要投入的金豆的数量,点击即为参与活动,在该轮活动结束前,如用户离开活动页面即为放弃参与活动。具体以系统提示为准。同一用户在该轮活动结束前可多次对相同选项进行多次竞猜,也可对不同选项进行竞猜。</P>
					<P>5、用户所选玩法组合与开出的玩法组合状态一致即为用户竞猜结果正确。</P>
					<P>6、系统对每一用户参与同一轮活动设定了投入金豆的单次最低值及最高值,如您投入金豆的数量低于最低值或高于最高值(多次投入会被累计计算),您将无法参与竞猜。具体以系统提示为准。</P>
					<P>7、本活动每轮时间以系统提示为准，倒计时为“0”时竟猜活动结束。</P>
					<P>8、除另有说明外,不论用户的竞猜结果如何,用户投入的金豆因参与活动而消耗完毕,无法进行返还。如您竞猜获胜,则获得的金豆直接发放到您的账户中。</P>
					<P>注意事项</P>
					<P>1、欢乐竞猜有权根据活动参与情况，结束或提前结束用户参与活动的竞猜(指某轮活动不再接受用户的竞猜)。</P>
					<P>2、如遇到不可抗力或其他客观原因导致活动竞猜无法继续进行，则用户的投入将会全额返还到用户的账户中,欢乐竞猜无需因此而承担任何赔偿或补偿责任。</P>
					<P>3、活动期间,如用户存在违规行为(包括但不限于机器作弊),欢乐竞猜将取消用户的竞猜获奖资格,并有权依照欢乐竞猜相关规则进行处理。</P>
					<P>4、欢乐竞猜可根据活动举办的实际情况,在法律允许的范围内,对本活动规则进行变动或调整,相关变动或调整将公布在活动页面上。</P>
				</div>
			</div>
		</div>
		<!--订单-->
		<div class="tanc tanc_order">
			<div class="tanc_beij"></div>
			<div class="order_list">
				<!--没有订单情况-->
				<div class="list_none" style="display:none"><img src="/html/games/lll/images/img_none.png"></div>
				<!--有订单情况-->
				<div class="list_info">
					<ul>
						<li>
							<div class="top">
								<div class="t1 ov">
									<div class="t1_time fl">2017-09-18  15:52</div>
									<div class="t1_num fr">共投<span class="order_tud">20豆</span></div>
								</div>
								<div class="t2 ov">
									<div class="t2_num fl">订单编号：<span class="order_number">894602882</span></div>
									<div class="t2_state fr"><span class="order_state zn">未中奖</span></div>
								</div>
							</div>
							<div class="dom">
								<div class="d1 ov">0953期（本期结果:<i class="i1"></i><i class="i2"></i><i class="i3"></i><span class="order_total">12</span><span class="order_dans">双</span><span class="order_bs">大</span>)</div>
								<div class="d1">和值：<span class="bs">大</span>奖励倍数:<span class="order_beis">1.9</span></div>
								<div class="d2">投<span class="order_tud">20豆</span><span class="order_state zn">未中奖</span></div>
							</div>
						</li>
						<li>
							<div class="top">
								<div class="t1 ov">
									<div class="t1_time fl">2017-09-18  15:52</div>
									<div class="t1_num fr">共投<span class="order_tud">20豆</span></div>
								</div>
								<div class="t2 ov">
									<div class="t2_num fl">订单编号：<span class="order_number">894602882</span></div>
									<div class="t2_state fr"><span class="order_state zj">共中38豆</span></div>
								</div>
							</div>
							<div class="dom">
								<div class="d1 ov">0953期（本期结果:<i class="i1"></i><i class="i2"></i><i class="i3"></i><span class="order_total">12</span><span class="order_dans">双</span><span class="order_bs">大</span>)</div>
								<div class="d1">和值：<span class="bs">大</span>奖励倍数:<span class="order_beis">1.9</span></div>
								<div class="d2">投<span class="order_tud">20豆</span><span class="order_state zj">共中38豆</span></div>
							</div>
						</li>
						<li>
							<div class="top">
								<div class="t1 ov">
									<div class="t1_time fl">2017-09-18  15:52</div>
									<div class="t1_num fr">共投<span class="order_tud">20豆</span></div>
								</div>
								<div class="t2 ov">
									<div class="t2_num fl">订单编号：<span class="order_number">894602882</span></div>
									<div class="t2_state fr"><span class="order_state">未中奖</span></div>
								</div>
							</div>
							<div class="dom">
								<div class="d1 ov">0953期（本期结果:<i class="i1"></i><i class="i2"></i><i class="i3"></i><span class="order_total">12</span><span class="order_dans">双</span><span class="order_bs">大</span>)</div>
								<div class="d1">和值：<span class="bs">大</span>奖励倍数:<span class="order_beis">1.9</span></div>
								<div class="d2">投<span class="order_tud">20豆</span><span class="order_state zn">未中奖</span></div>
							</div>
							<div class="dom">
								<div class="d1 ov">点数：<i class="i1"></i>，奖励倍数:<span class="order_beis">1.9</span><a href="javascript:;" class="btn_ans"></a></div>
							</div>
						</li>
					</ul>
					<div class="btn"><a href="javascript:;" class="btn_more">查看更多</a></div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/html/games/lll/js/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script type="text/javascript" src="/html/games/lll/js/vue_send.js"></script>
		<script language="javascript"> 
			var mySwiper = new Swiper('.swiper-container',{
			loop : true,
//			prevButton:'.swiper-button-prev',
			nextButton:'.swiper-button-next',
			onSlideChangeEnd: function(swiper){
		      console.log(swiper.activeIndex);	
		      if(swiper.activeIndex==1||swiper.activeIndex==4){
		      	$(".six_history .history_fr li i").show();
		      	$(".six_history .history_fr li .spn").removeClass("cff");
		      }
		      else if(swiper.activeIndex==2){
		      	$(".six_history .history_fr li i").hide();
		      	$(".six_history .history_fr li .spn").addClass("cff");
		      }
		      else if(swiper.activeIndex==3||swiper.activeIndex==0){
		      	$(".six_history .history_fr li i").hide();
		      	$(".six_history .history_fr li .spn").addClass("cff");
		      }
		    }
			})
		</script>
	</body>
</html>
