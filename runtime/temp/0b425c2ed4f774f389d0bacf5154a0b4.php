<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\user\regist.html";i:1508739969;}*/ ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="__CSS_PATH__/normalize.css">
    <link rel="stylesheet" type="text/css" href="__CSS_PATH__/common.css">
    <link href="__CSS_PATH__/register.css" rel="stylesheet" />

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
    <div class="per_content">
      <div class="log_top">
      <a href="javascript:;" class="g">个人用户</a>
      <div class="log_right">已有账户？
        <a href="<?php echo url('index/user/login'); ?>" target="_blank">直接登录></a>
      </div>
       </div>
       <div class="clearfix"></div>
     
       <div class="register_left">
        <form name="form" method="post" action="">
      <div  class="register_left_tex">
        <img src="__image_PATH__/images/head.png">
        <input type="text"  id="tel" onchange="checkPhone()" placeholder="请输入用户名" name="u"/>
        <span></span>
      </div>
       <div  class="register_left_texl">
         <img src="__image_PATH__/images/Key.png">
         <input type="password" id="pas" onchange="pass()" placeholder="由6~18位数字，小写字母或符号组成" />  
         <span id="pass-ms"></span>
      </div>
      <div  class="register_left_texl">
         <img src="__image_PATH__/images/Key.png">
         <input type="password" id="pas" onchange="pass()" placeholder="由6~18位数字，小写字母或符号组成" />  
         <span id="pass-ms"></span>
      </div>
      <div  class="register_left_texl">
         <img src="__image_PATH__/images/Mobile_03.png">
        <input type="text" id="name" placeholder="请输入您的手机号" onchange="names()"/>
        <span id="user-ms"></span>
      </div>
      <div  class="register_left_texs">
         <input type="text" placeholder="请输入短信验证码"  id="txtMobileCode" onpaste="return false"/>
         <input type="button" value="发送验证码" id="texl_right" onclick="SetCode(true);"/>
      </div>
      
      <input type="submit"  value="注册完成" id="log" onclick="return check()"/>
    </form>
       </div>
    
        
        <div class="register_right">
          <img src="__image_PATH__/zhuce_1.jpg"/>
        </div>
    
    </div>
    
    
    

<script src="../js/js.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.js" type="text/javascript" charset="utf-8" defer="defer"></script>  
  </body>

</html>