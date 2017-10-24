<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class user extends Model{
 	// public function _initialize()
  //   {
  //       $this ->user = new User();
  //   }
    //插入一条数据
    public function checkadd($post)
    {	
    	$pass = ($_POST['rpassword']);
    	if (!empty($_POST['rpassword'])) {
	    	$user = new User();
	    	$data = [
	    	   'username' =>$_POST['username'],
	 		    'pssd' =>md5($pass),
	 		   	'email' => $_POST['email'],
	 		   	'phone' => $_POST['phone']
	     	];
	     	$result = $user -> save($data);
	     	return $result;
    	}
    	
    }
    //注册
    //判断用户是否存在
    public function checkselect()
    {
    	$result = Db::name('user')->where('username',$_POST['username'])->select();
    	 // dump($result);
    	if ($result) {
    		$data = ['status'=>1, 'info' => $result];
    	} else {
    		$data = ['status'=>0, 'info' => $result];
    	}
    	/*dump(json_encode($data));die;*/
    	return json_encode($data);
    }
    //登陆
    public function checkdenglu()
    {
    	$resultt = Db::name('user')->where('username',$_POST['username'])->select();
    	// dump($resultt);
    	 	if($resultt){
			    $data = ['status'=>1,'info'=>$resultt];
			  } else {
			  	 $data = ['status'=>0,'info'=>$resultt];
			  } 
			return(json_encode($data));
			 // dump($data);
       }
       //登陆判断用户和密码是否一致
       public function dengluselect($post)
       {
       	    $uname = $_POST['username'];
       	    $pass  = MD5($_POST['password']);
       	    // dump($pass);die;
       	    $result = Db::name('user')->where('username',$uname)->where('pssd',$pass)->select();
       	    if (  $result) {
       	        session::set('username', $result[0]['username']);
       	    }
       	 	return $result;
       }
       //查询用户表的id
       public function uid($uname1)
       {
         $result3 = Db::name('user')->where('username',$uname1)->select();
         return $result3[0]['u_id'];
       }
       //个人购物查询用户表的id
       public function gouwu($una)
       {
         $result3 = Db::name('user')->where('username',$una)->select();
         return $result3[0]['u_id'];
       }
       //根据用户名去查询用户的id
       public function usd($username)
       {
         return Db::name('user')->where('username',$username)->select();
       }
       //查询用户的个人信息
       public function info($name)
       {
        return  Db::name('user')->where("username = '$name'")->select();
       }
       //生成订单查询用户id
       public function us($username)
       {
          return Db::name('user')->where('username',$username)->select();
       }
       //收货详情
       public function shou($name)
       {
         // 查询收货详情
          return  Db::field('shouhuo.sname,shouhuo.sphone,shouhuo.semail,shouhuo.infomation,shouhuo.youbian')
            ->table(['think_user'=>'user','think_shouhuo'=>'shouhuo'])
            ->where("user.u_id = shouhuo.yyid")
            ->where("sta = 0")
            ->where("user.username = '$name'")
            ->select();
       }
       //修改个人手机号
       public function ol($name)
       {
          return Db::name('user')->where("username = '$name'")->select();
       }
       
       public function phone($name,$newphone)
       {
          return Db::name('user')->where("username = '$name'")->update(['phone'=>$newphone]);
         
       }
       //修改邮箱
       public function el($name)
       {
          return Db::name('user')->where("username = '$name'")->select();
       }
       public function email($name,$newemail)
       {
       
          return Db::name('user')->where("username = '$name'")->update(['email'=>$newemail]);
       }
       //查询旧密码
       public function ppl($name)
       {
         return Db::name('user')->where("username = '$name'")->select();
       }
       //修改密码
       public function pss($name,$newpassword)
       {
          return Db::name('user')->where("username = '$name'")->update(['pssd'=>$newpassword]);
       }
       //查询用户的id
       public function di($name)
       {
         return Db::name('user')->where("username = '$name'")->select();
       }
       //查询收货用户的id
       public function sd($username)
       {
         return Db::name('user')->where("username = '$username'")->select();
       }
       //查询用户
       public function ch ($name)
       {
         return Db::name('user')->where("username = '$name'")->select();

       }
       //修改密码
       public function zhao($na,$pas)
       {
        // var_dump($pas);die;
        $pas1 = md5($pas);
        return Db::name('user')->where("username = '$na'")->update(['pssd' => $pas1]);
       }
}
