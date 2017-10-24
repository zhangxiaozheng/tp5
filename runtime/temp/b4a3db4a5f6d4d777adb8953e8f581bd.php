<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\index\index.html";i:1508738870;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="__CSS_PATH__/common.css">
		<link href="__CSS_PATH__/index.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="__CSS_PATH__/swiper.min.css" />
	</head>
	<style type="text/css">
		.replace-module {
			cursor: pointer;
			display: none;
		}
	</style>

	<body>
		<!--侧边栏-->
		<div class="navtool-ul">
			<div class="yda_img">
				<img src="__image_PATH__/84521322231.png">
			</div>
			<ul class="lower-part">
				<li>
					<a href="javascript:;">
						<img src="__image_PATH__/33333_03_63.png">
						<p>我的农场</p>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<img src="__image_PATH__/33333_03_68.png">
						<p>我的任务</p>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<img src="__image_PATH__/33333_03_72.png">
						<p>我的订单</p>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<img src="__image_PATH__/33333_03_75.png">
						<p>我的收藏</p>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<img src="__image_PATH__/33333_63.png">
						<p>消息</p>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="shopping_cart">
						<img src="__image_PATH__/33333_74.png">
						<em>0</em>
					</a>
				</li>
				<li>
					<a href="javascript:;" id="wjh">
						<img src="__image_PATH__/522663.png">
					</a>
				</li>
			</ul>
		</div>
		<!--头部-->
		<div class="header">
			<div class="header_center">
				<div class="header_left">
					<span>欢迎来到印第安！</span>
					<div class="header_left_r">
						<img src="__image_PATH__/454.png">
						<em>当前城市：</em>
						<select name="">
							<option value="">北京</option>
							<option value="">天津</option>
							<option value="">河北</option>
						</select>
					</div>
				</div>
				<div class="header_right">
					<a href="<?php echo url('index/user/login'); ?>" target="_blank">登陆</a>
					<a href="<?php echo url('index/user/regist'); ?>" target="_blank">注册 <span class="verticalbar">|</span></a>

					<ul class="header_bottom_right_ul">
						<li>
							<a href="Personal-Center_Order.html" target="_blank">我的订单<span class="verticalbar">|</span></a>
							<ul>
								<li>
									<a href="Personal-Center_Order.html" target="_blank">全部订单<em>(10)</em></a>
								</li>
								<li>
									<a href="Personal-Center_Order.html" target="_blank">全部订单<em>(15)</em></a>
								</li>
								<li>
									<a href="Personal-Center_Order.html" target="_blank">全部订单<em>(11)</em></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="Personal-Center.html" target="_blank ">我的农庄<span class="verticalbar">|</span></a>
						</li>
						<li>
							<img src="__image_PATH__/333_03.png">
							<a href="javascript:;" target="_blank ">移动端下载</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--navtop-->
		<div class="topnav">
			<div class="logn">
				<img src="__image_PATH__/logo.png" />
			</div>
			<div class="find">
				<div class="finding">
					<input type="text" placeholder="桃子" />
					<img src="__image_PATH__/su_s.png" class="icon" />
				</div>
				<p class="sousuo">搜索</p>
				<div class="hot">
					<span>热门：</span>
					<ul>
						<li>鸡肉</li>
						<li>羊肉</li>
						<li>驴肉</li>
						<li>农鸡蛋</li>
					</ul>
				</div>
			</div>
		</div>
		<!--nav-->
		<div class="nav">
			<ul>
				<li>
					<a href="javascript:;" class="active">首页</a>
				</li>
				<li>
					<a href="adoption_ecological.html" target="_blank">生态认养</a>
				</li>
				<li>
					<a href="Fresh_purchase.html" target="_blank">生鲜购买</a>
				</li>
				<li>
					<a href="Ecological_Farm.html" target="_blank">生态农庄</a>
				</li>
				<li>
					<a href="javascript:;">活动中心</a>
				</li>
				<li>
					<a href="javascript:;">平台招募</a>
				</li>
			</ul>
		</div>
		<!--轮播图-->
		<div class="flexslider">
			<ul class="slides">
				<li style="background:url(__image_PATH__/img1.jpg) 50% 0 no-repeat;"></li>
				<li style="background:url(__image_PATH__/img2.jpg) 50% 0 no-repeat;"></li>
				<li style="background:url(__image_PATH__/img3.jpg) 50% 0 no-repeat;"></li>
				<li style="background:url(__image_PATH__/img4.jpg) 50% 0 no-repeat;"></li>
				<li style="background:url(__image_PATH__/img5.jpg) 50% 0 no-repeat;"></li>
			</ul>
		</div>
		<!--分类导航-->
		<div class="Nav-class">
			<div class="Nav-class-contain">
				<div class="Nav-class-top">
						<a href="javascript:;">
							<img src="__image_PATH__/33333_03_34.png" />畜牧
						</a>
						<a href="javascript:;">
							<img src="__image_PATH__/33333_28.png" />果木
						</a>
						<a href="javascript:;">
							<img src="__image_PATH__/33333_03_38.png" />蔬菜
						</a>
						<a href="javascript:;">
							<img src="__image_PATH__/33333_36.png" />杂粮
						</a>
						<a href="javascript:;">
							<img src="__image_PATH__/33333_03_31.png" />饮品
						</a>
						<a href="javascript:;">
							<img src="__image_PATH__/33333_03_41.png" />一分田
						</a>
				</div>

				<div class="Nav-class-description">
					<h3>特色产品可视化认购平台</h3>
					<p>TESECHANPINGKESHIHUAPTAI</p>
				</div>
			</div>
		</div>
		<!--生态农场-->
		<div class="ecological-farm">
			<div class="e-content">
				<div class="e-hd">
					<div class="e-hd-left">
						<img src="__image_PATH__/hdkeft.jpg" />
					</div>
					<div>
						<h4>生/态/农/场</h4>
						<p>SHENGTIANNONGCHANG</p>
					</div>
					<div class="e-hd-left">
						<img src="__image_PATH__/hdkeft.jpg" />
					</div>
				</div>

				<div class="e-bd">
					<!--生态农场产品-->
					<ul>
						<li>
							<div class="e-item-list Initial-Module">
								<!--默认产品-->
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>100</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-item">
										<img src="__image_PATH__/222_09.png" />
									</div>
									<!--产品图片-->
								</div>

								<div class="e-Bdpro">
									<!--产品介绍文字-->
									<h4>贝尔农庄</h4>
									<p>北京市大兴区贝尔农庄位于是 一所连锁农庄</p>
								</div>
							</div>

							<div class="e-item-list replace-module">
								<!--移入后的产品布局-->
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-bott_prompt">
										<!--产品星级-->
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
									</div>

									<div class="e-item">
										<img src="__image_PATH__/222_14.png" />
									</div>
									<!--产品图片-->
								</div>
								<div class="e-Bdpro e-Bdpros">
									<!--产品介绍文字-->
									<h4>特色生态产品</h4>
									<div class="classification">
										<a href="javascript:;">民宿</a>
										<a href="javascript:;">餐饮</a>
										<a href="javascript:;">娱乐</a>
										<a href="javascript:;">休闲</a>
									</div>
									<div class="Camera">
										<a href="javascript:;">查看农庄</a>
										<div class="Camera_img">
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="e-item-list Initial-Module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>100</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-item">
										<img src="__image_PATH__/222_06.png" />
									</div>
									<!--产品图片-->
								</div>

								<div class="e-Bdpro">
									<!--产品介绍文字-->
									<h4>贝尔农庄</h4>
									<p>北京市大兴区贝尔农庄位于是 一所连锁农庄</p>
								</div>
							</div>

							<div class="e-item-list replace-module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-bott_prompt">
										<!--产品星级-->
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
									</div>

									<div class="e-item">
										<img src="__image_PATH__/222_14.png" />
									</div>
									<!--产品图片-->
								</div>
								<div class="e-Bdpro e-Bdpros">
									<!--产品介绍文字-->
									<h4>特色生态产品</h4>
									<div class="classification">
										<a href="javascript:;">民宿</a>
										<a href="javascript:;">餐饮</a>
										<a href="javascript:;">娱乐</a>
										<a href="javascript:;">休闲</a>
									</div>
									<div class="Camera">
										<a href="javascript:;">查看农庄</a>
										<div class="Camera_img">
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="e-item-list Initial-Module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>100</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-item">
										<img src="__image_PATH__/222_12.png" />
									</div>
									<!--产品图片-->
								</div>

								<div class="e-Bdpro">
									<!--产品介绍文字-->
									<h4>贝尔农庄</h4>
									<p>北京市大兴区贝尔农庄位于是 一所连锁农庄</p>
								</div>
							</div>

							<div class="e-item-list replace-module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-bott_prompt">
										<!--产品星级-->
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
									</div>

									<div class="e-item">
										<img src="__image_PATH__/222_14.png" />
									</div>
									<!--产品图片-->
								</div>
								<div class="e-Bdpro e-Bdpros">
									<!--产品介绍文字-->
									<h4>特色生态产品</h4>
									<div class="classification">
										<a href="javascript:;">民宿</a>
										<a href="javascript:;">餐饮</a>
										<a href="javascript:;">娱乐</a>
										<a href="javascript:;">休闲</a>
									</div>
									<div class="Camera">
										<a href="javascript:;">查看农庄</a>
										<div class="Camera_img">
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="e-item-list Initial-Module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>100</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-item">
										<img src="__image_PATH__/222_06.png" />
									</div>
									<!--产品图片-->
								</div>

								<div class="e-Bdpro">
									<!--产品介绍文字-->
									<h4>贝尔农庄</h4>
									<p>北京市大兴区贝尔农庄位于是 一所连锁农庄</p>
								</div>
							</div>

							<div class="e-item-list replace-module">
								<div class="e-Hdpro">
									<div class="e-prompt">
										<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
										<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
									</div>
									<!--产品提示文字直播部分-->

									<div class="e-bott_prompt">
										<!--产品星级-->
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/sta.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
										<span><img src="__image_PATH__/stas.png"></span>
									</div>

									<div class="e-item">
										<img src="__image_PATH__/222_14.png" />
									</div>
									<!--产品图片-->
								</div>
								<div class="e-Bdpro e-Bdpros">
									<!--产品介绍文字-->
									<h4>特色生态产品</h4>
									<div class="classification">
										<a href="javascript:;">民宿</a>
										<a href="javascript:;">餐饮</a>
										<a href="javascript:;">娱乐</a>
										<a href="javascript:;">休闲</a>
									</div>
									<div class="Camera">
										<a href="javascript:;">查看农庄</a>
										<div class="Camera_img">
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
											<a href="javascript:;"><img src="__image_PATH__/33333_05.png"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="raise-livestock">
			<!--畜牧-->
			<div class="r-content ">
				<div class="r-title">
					畜牧
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">大闸蟹</a>&nbsp;/&nbsp;</span>
						<span><a href="#">小龙虾</a>&nbsp;/&nbsp;</span>
						<span><a href="#">水鸭 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">浙江大鹅</a>&nbsp;/&nbsp;</span>
						<span><a href="#">兴文乌骨鸡</a>&nbsp;/&nbsp;</span>
						<span><a href="#">神户牛肉</a>&nbsp;/&nbsp;</span>
						<span><a href="#">新疆羊肉</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											日本不神户纯种牛
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_25.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认养></a>
										<a href="#">进入农庄></a>
									</div>
								</div>
							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											新疆正宗波尔羊
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_27.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认养></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											西藏原生态黑猪
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_30.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认养></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											新疆正宗波尔羊
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_25.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认养></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="raise-livestock fruitwood">
			<!--果木-->
			<div class="r-content ">
				<div class="r-title">
					果木
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">苹果</a>&nbsp;/&nbsp;</span>
						<span><a href="#">车厘子</a>&nbsp;/&nbsp;</span>
						<span><a href="#">葡萄 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">石榴</a>&nbsp;/&nbsp;</span>
						<span><a href="#">芒果</a>&nbsp;/&nbsp;</span>
						<span><a href="#">西瓜</a>&nbsp;/&nbsp;</span>
						<span><a href="#">香蕉</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner fruitwood_img">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											日本柠檬
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_40.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											新疆石榴
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_42.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											广西火龙果
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_44.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											广西火龙果
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_44.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="raise-livestock Vegetables">
			<!--蔬菜-->
			<div class="r-content ">
				<div class="r-title">
					蔬菜
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">大白菜</a>&nbsp;/&nbsp;</span>
						<span><a href="#">西红柿</a>&nbsp;/&nbsp;</span>
						<span><a href="#">胡萝卜 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">白萝卜</a>&nbsp;/&nbsp;</span>
						<span><a href="#">玉米</a>&nbsp;/&nbsp;</span>
						<span><a href="#">秋葵</a>&nbsp;/&nbsp;</span>
						<span><a href="#">紫菜</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner Vegetables_img">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											日本圆白菜
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_58.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											新疆小白菜
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_53.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											西藏青笋
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_55.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											西藏青笋
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_55.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="raise-livestock Coarse_Cereals">
			<!--杂粮-->
			<div class="r-content ">
				<div class="r-title">
					杂粮
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">广西大米</a>&nbsp;/&nbsp;</span>
						<span><a href="#">玉米</a>&nbsp;/&nbsp;</span>
						<span><a href="#">小米 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">高粱</a>&nbsp;/&nbsp;</span>
						<span><a href="#">糙米</a>&nbsp;/&nbsp;</span>
						<span><a href="#">小麦</a>&nbsp;/&nbsp;</span>
						<span><a href="#">大豆</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner Coarse_Cereals_img">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											山西薏米
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_72.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											甘肃小米
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_67.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											五常大米
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_69.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											五常大米
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_69.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="raise-livestock drink">
			<!--饮品-->
			<div class="r-content ">
				<div class="r-title">
					饮品
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">红酒</a>&nbsp;/&nbsp;</span>
						<span><a href="#">高粱酒</a>&nbsp;/&nbsp;</span>
						<span><a href="#">玉米酒 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">米酒</a>&nbsp;/&nbsp;</span>
						<span><a href="#">铁观音</a>&nbsp;/&nbsp;</span>
						<span><a href="#">普洱</a>&nbsp;/&nbsp;</span>
						<span><a href="#">红茶</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner drink_img">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											云南蜂蜜
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_88.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>
							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											五粮液
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_85.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											山西汾酒
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_82.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro r-Hd">
										<div class="e-prompt r-proTitle">
											山西汾酒
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-item r-item">
											<img src="__image_PATH__/222_82.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即购买></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="raise-livestock Fen_Tian">
			<!--一分田-->
			<div class="r-content ">
				<div class="r-title">
					一分田
				</div>
				<div class="r-seemove ">
					<div class="r-seemove-list">
						<span><a href="#">水田</a>&nbsp;/&nbsp;</span>
						<span><a href="#">旱地</a>&nbsp;/&nbsp;</span>
						<span><a href="#">山地 </a>&nbsp;/&nbsp;</span>
						<span><a href="#">水塘</a>&nbsp;/&nbsp;</span>
						<span><a href="#">大棚</a>&nbsp;/&nbsp;</span>
					</div>
					<div class="r-seemove-word">
						<a href="#">查看更多》</a>
					</div>
				</div>
				<div class="r-banner Fen_Tian_img">
					<a href="#">立即认购 > ></a>
				</div>

				<div class="r-prolist">
					<div class="e-bd">
						<ul>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro Fen_Tian-Hd">
										<div class="e-prompt Fen_Tian-proTitle">
											贝尔农庄一亩出租
										</div>
										<!--产品提示文字直播部分-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认购></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro Fen_Tian-Hd">
										<div class="e-prompt Fen_Tian-proTitle">
											贝尔农庄一亩出租
										</div>
										<!--产品提示文字直播部分-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认购></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro Fen_Tian-Hd">
										<div class="e-prompt Fen_Tian-proTitle">
											贝尔农庄一亩出租
										</div>
										<!--产品提示文字直播部分-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认购></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
							<li>
								<div class="e-item-list Initial-Module">
									<!--产品初始布局-->
									<div class="e-Hdpro Fen_Tian-Hd">
										<div class="e-prompt Fen_Tian-proTitle">
											贝尔农庄一亩出租
										</div>
										<!--产品提示文字直播部分-->
									</div>
								</div>
								<div class="e-item-list replace-module">
									<!--移入后的产品布局-->
									<div class="e-Hdpro">
										<div class="e-prompt">
											<span class="e-prompt-left"><em>1000</em>&nbsp;观看</span>
											<span class="e-prompt-right">正在直播<em><img src="__image_PATH__/33333_45.png"/></em></span>
										</div>
										<!--产品提示文字直播部分-->

										<div class="e-bottom_prompt">
											<div class="ification">
												<a href="javascript:;">民宿</a>
												<a href="javascript:;">餐饮</a>
												<a href="javascript:;">娱乐</a>
												<a href="javascript:;">休闲</a>
											</div>
											<div class="start_list">
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/sta.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
												<span><img src="__image_PATH__/stas.png"></span>
											</div>
										</div>
										<!--产品提示评星-->

										<div class="e-item">
											<img src="__image_PATH__/222_14.png" />
										</div>
										<!--产品图片-->
									</div>
								</div>

								<div class="e-Bdpro r-Bdpro">
									<!--产品底部默认部分-->
									<!--产品介绍文字-->
									<h4>来自贝尔农庄草原</h4>
									<p>认养价￥<em>299.9</em></p>
									<div class="Get_into">
										<a href="#">立即认购></a>
										<a href="#">进入农庄></a>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!--认购者讲-->
		<div class="Subscriber-farm">
			<div class="Subscriber-content">
				<div class="e-hd">
					<div class="e-hd-left">
						<img src="__image_PATH__/hdkeft.jpg" />
					</div>
					<div>
						<h4>认/购/者/讲</h4>
						<p>RENGOUZHEJLANG</p>
					</div>
					<div class="e-hd-left">
						<img src="__image_PATH__/hdkeft.jpg" />
					</div>
				</div>
			</div>
		</div>

		<!--底部轮播-->

		<div class="figure_next clearfix">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<!--第一组-->

						<div class="figure_li">
							<!--第一个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第二个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第三个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="swiper-slide">
						<!--第二组-->

						<div class="figure_li">
							<!--第一个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第二个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第三个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="swiper-slide">
						<!--第三组-->

						<div class="figure_li">
							<!--第一个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第二个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
							<!--第三个-->
							<div class="figure_First">
								<img src="__image_PATH__/index_per.jpg" class="log" />
								<p>爱吃的人</p>
								<div class="figure_center">
									<div class="figure_center_l">
										<img src="__image_PATH__/Plum.png">
									</div>
									<div class="figure_center_r">
										<ul>
											<li style="margin-left: 0;"><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/start.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
											<li><img src="__image_PATH__/starts.png"></li>
										</ul>
										<div class="figure_center_rwords">这个大枣油田又脆，价格划算， 送货快，好评</div>
										<div class="figure_center_time">2017-09-15 <em>10:28:17</em> </div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<!--底部-->
		<div class="clearfix"></div>
		
		
		<div class="foot-con">
			<div class="foot">
			<div class="foot_left">
				<img src="__image_PATH__/logo.png" alt="" />
			</div>
			<div class="foot_right">
				<div class="foot_toplist">
					<ul>
						<li>
							<a href="javascript:;">新手指南</a>
							<ol>
						<li>
							<span><a href="javascript:;">了解印第安</a></span>
							<span><a href="javascript:;">注册新住户</a></span>
							<span><a href="javascript:;">买家入门</a></span>
							<span><a href="javascript:;">卖家入门</a></span>
						</li>
							</ol>
						</li>
						<li>
							<a href="javascript:;">采购商服务</a>
							<ol>
								<li>
							<span><a href="javascript:;">找供应商</a></span>
							<span><a href="javascript:;">安装祖玛</a></span>
							<span><a href="javascript:;">认购祖玛</a></span>

						</li>
							</ol>
						</li>
						<li>
							<a href="javascript:;">供应商服务</a>
							<ol>
								<li>
							<span><a href="javascript:;">卖家服务</a></span>
							<span><a href="javascript:;">物流服务</a></span>
						</li>
							</ol>
						</li>
						<li>
							<a href="javascript:;">印第安服务</a>
							<ol>
									<li>
							<span><a href="javascript:;">学院 印第安</a></span>
							<span><a href="javascript:;">联系客户</a></span>

						</li>
							</ol>
						</li>
						<li>
							<a href="javascript:;">交易安全</a>
							<ol>
								<li>
							<span><a href="javascript:;">交易维权攻略</a></span>
							<span><a href="javascript:;">印第安规则</a></span>
						</li>
							</ol>
						</li>
					</ul>
				</div>
				
				
			</div>

			<div class="foot_address">
					<div class="foot_address_list">
						<span><a href="javascript:;">关于印第安</a></span><b>|</b>
						<span><a href="javascript:;">联系我们</a></span><b>|</b>
						<span><a href="javascript:;">欢迎合作</a></span><b>|</b>
						<span><a href="javascript:;">知识产权</a></span><b>|</b>
						<span><a href="javascript:;">著作产权与商标声明</a></span><b>|</b>

						<span><a href="javascript:;">法律声明</a></span><b>|</b>
						<span><a href="javascript:;">服务条款</a></span><b>|</b>
						<span><a href="javascript:;">隐私声明</a></span><b>|</b>
						<span><a href="javascript:;">网站导航</a></span>
					</div>

					<div class="foot_serive">
						<span>增值电信业务许可证：浙B2-20070066</span>&nbsp;
						<span>互联网药品信息服务 资格证书：（浙）-经营性-2012-0009</span>&nbsp;
						<span>信息网络传播试听节目许可证：1109366</span>
					</div>

					<div class="foot_coy">
						<span>©2010-2016&nbsp;1688.com版权所有</span>&nbsp;
						<span>互联网违法和不良信息举报 中心：0571-81683755 blxx@listalibaba-inc.com</span>
					</div>
				</div>
			
		</div>


		</div>

		
	</body>
	<script type="text/javascript" src="__JS_PATH__/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="__JS_PATH__/jquery.flexslider-min.js"></script>
	<script src="__JS_PATH__/swiper.jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="__JS_PATH__/index.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.flexslider').flexslider({
				directionNav: true,
				pauseOnAction: false
			});

		});
	</script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			spaceBetween: 30
		});
	</script>
</html>