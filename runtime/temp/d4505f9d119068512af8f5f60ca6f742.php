<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp64\www\tp5\public/../application/index\view\user\login.html";i:1508738744;}*/ ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="__CSS_PATH__/normalize.css">
    <link rel="stylesheet" type="text/css" href="__CSS_PATH__/common.css">
    <link href="__CSS_PATH__/login.css" rel="stylesheet" />
  </head>

  <body>
    <!--头部-->
    <div class="header">
      <a href="index.html" target="_blank"><img src="__image_PATH__/banner.png"></a>
      <span></span>
      <div class="wor">
        <p>有机 天然 高品质</p>
        <p>ORGANIC NATURAL HlGH QUALITY</p>
      </div>
      <a href="javascript:;">印第安欢迎你的加入</a>
    </div>
    <!--中部-->
    <div class="center">
      <div class="center_auto clearfix">
      <div class="I_im">
        <img src="__image_PATH__/login_banner.jpg"/>
      </div>
      <div class="box">
        <div class="box_s">
          <div class="log_top">
            <a href="javascript:;">用户登录</a>
            <div class="log_right">没有印第安账号？
              <a href="<?php echo url('index/user/regist'); ?>" target="_blank">立即注册></a>
            </div>
          </div>
          <div class="log_h">
            <img src="__image_PATH__/inpho.png"> 短信快捷登录
          </div>
          <form action="" method="post">
            <input type="text"  id="tel" onchange="checkPhone()" placeholder="请输入手机号" />
          <input type="password" id="pas" onchange="pass()" placeholder="由6~18位数字，小写字母或符号组成" />  
         <span id="pass-ms"></span>
          <div class="automatic">
            <input type="checkbox">
            <span>商家登录</span>
            <a href="<?php echo url('index/user/pass.html'); ?>" target="_blank">忘记密码?</a>
          </div>
            <input type="submit" value="登录" id="log" onclick="return check()"/>
          </form>
          
        </div>
      </div>
      
      </div>
    </div>
<script src="__JS_PATH__/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="__JS_PATH__/layer/layer.js" type="text/javascript" charset="utf-8"></script>
<script src="__JS_PATH__/jquery.js" type="text/javascript" charset="utf-8" defer="defer"></script>
  </body>
</html>