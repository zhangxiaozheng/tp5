<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use app\index\model\Collect;
use app\index\model\Order;
use app\index\model\User;
use app\index\model\Shouhuo;
class Myself extends Controller
{      
     protected $user;
     protected $order;
     protected $collect;
     protected $shouhuo;
    public function _initialize()
    {
        $this ->collect = new Collect();
        $this ->order = new Order();
        $this ->user = new User();
        $this ->shouhuo = new Shouhuo();

    }
	 public function Member_Order()
    {
            $name = Session::get('username');
            $this->assign('name',$name);
            $ding = $this->order->ding($name);
            if (!empty($ding)) {
            $this->assign('ding',$ding);
         }
        
         return  $this->fetch();
     }
      public function Member_Address()
    {
     
         $name = Session::get('username');
         $this->assign('name',$name);
         //查询收货信息
         $in =$this->shouhuo->xin($name);
         if (!empty($_POST['submit'])) {
              if (empty($_POST['uname'])) {
               $this->success('用户名不能为空','/index/myself/Member_Address');
             }
               if (empty($_POST['email'])) {
               $this->success('邮箱不能为空','/index/myself/Member_Address');
             }
              if (empty($_POST['dizhi'])) {
               $this->success('地址不能为空','/index/myself/Member_Address');
             }
             if (empty($_POST['youbian'])) {
               $this->success('邮编不能为空','/index/myself/Member_Address');
             }
             if (empty($_POST['phone'])) {
               $this->success('手机号不能为空','/index/myself/Member_Address');
             }

             $arr[] = $_POST['uname'];
             $arr[] = $_POST['email'];
             $arr[] = $_POST['dizhi'];
             $arr[] = $_POST['youbian'];
             $arr[] = $_POST['phone'];
              $ga = $this->shouhuo->xiu($arr,$name);
             if ($ga) {
                  $this->success('更新地址成功','/index/myself/Member_Address');
             } else{
                  $this->success('更新地址失败','/index/myself/Member_Address');
             }
         }
         $this->assign('in',$in);
         return  $this->fetch();
     }
     public function Member_User()
    {
     
         $name = Session::get('username');
         $this->assign('name',$name);
         //用户个人信息
         $info = $this->user->info($name);
        //查询用户的id
         $dd =$this->user->di($name);
         $de = $dd[0]['u_id'];
          //订单支付数量
         $zi =$this->order->ge($de);
          //订单未支付数量
         $wei =$this->order->ge1($de);
         //订单未评论数量
         $ping =$this->order->ge2($de);

         $this->assign('ping',$ping);
         $this->assign('wei',$wei);
         $this->assign('zi',$zi);
         $this->assign('info',$info);
         return  $this->fetch();
     }
       public function Member_Collect()
    {
     
         $name = Session::get('username');
        //去查用户的信息
        $cang = $this->collect->zan($name);
        //获取用户的id
        $uid =$cang[0]['u_id'];
        //查询用户收藏的信息
        $cang1 = $this->collect->zan1($uid);
         $this->assign('cang1',$cang1);
         $this->assign('name',$name);
         return  $this->fetch();
     }
     public function doMember_Collect()
     {
        if (!empty($_POST['id'])) {
              //删除收藏
           $id = $_POST['id'];
           $resu = $this->collect->sn($id);
            if ($resu) {
                $this->success('移除收藏成功','/index/myself/Member_Collect');
            } else {
                $this->success('移除收藏失败','/index/myself/Member_Collect'); 
            }
        }
      
     }
     //取消订单
     public function quxiao()
      {
        $qid = $_POST['qu'];
        $qu = $this->order->qu($qid);
        if ($qu) {
           $this->success('取消订单成功','/index/myself/Member_Order');
        } else {
          $this->success('取消订单失败','/index/myself/Member_Order');
        }


       }
       //修改个人信息
       public function xinxi()
       {
         $name = Session::get('username');
         //修改手机后
         $oldphone = $_POST['oldphone'];
         $ol = $this->user->ol($name);
         $newphone = $_POST['newphone'];
         $phone = $ol[0]['phone'];
         //判断用户的手机号
         if ($oldphone == $phone) {
             
          $ph = $this->user->phone($name,$newphone);
            if ($ph) {
                 $this->success('修改手机号成功','/index/myself/Member_Safe');
            } else {
                 $this->success('修改手机号失败','/index/myself/Member_Safe');
            }
            
         }else {
             $this->success('请输入正确手机号','/index/myself/Member_Safe');
         }
       }
       //修改邮箱
       public function em()
       {
          $name = Session::get('username');
         //修改邮箱
         $oldemail = $_POST['oldemail'];
         $ol = $this->user->el($name);
         $newemail = $_POST['newemail'];
         $email = $ol[0]['email'];
         //判断用户的手机号
         if ($oldemail == $email) {
             
          $ph1 = $this->user->email($name,$newemail);
            if ($ph1) {
                 $this->success('修改邮箱成功','/index/myself/Member_Safe');
            } else {
                 $this->success('修改邮箱失败','/index/myself/Member_Safe');
            }
            
         }else {
             $this->success('请输入正确邮箱','/index/myself/Member_Safe');
         } 

       }
       public function ps()
       {
        $name = Session::get('username');
        //获取旧密码
        $oldpassword = md5($_POST['oldpassword']);
        // var_dump($oldpassword);
        $pl = $this->user->ppl($name);
        $pl1 = $pl[0]['pssd'];
        // var_dump($pl);die;
        if (strcmp($oldpassword,$pl1)) {
             $this->success('原密码输入错误','/index/myself/Member_Safe');
        } else {
          $newpassword = md5($_POST['newpassword']);
          $repassword = md5($_POST['repassword']);
          if (strcmp(  $newpassword,$repassword)) {
              $this->success('两次密码不一致','/index/myself/Member_Safe');
          } else{
            //修改密码
            $pd = $this->user->pss($name,$newpassword);
            if ($pd) {
                $this->success('修改密码成功','/index/myself/Member_Safe');
            } else {
                 $this->success('修改密码失败','/index/myself/Member_Safe');
            }

           }
         }

       }





        public function Member_Msg()
    {
     
         $name = Session::get('username');
         $this->assign('name',$name);
         return  $this->fetch();
     }
      public function Member_Links()
    {
     
         return  $this->fetch();
     }
  	 public function  Member_Safe()
    {
         $name = Session::get('username');
         $this->assign('name',$name);
         return  $this->fetch();
     }
     public function  Member_Packet()
    {
     
         return  $this->fetch();
     }
    public function  Member_Money()
    {
     
         return  $this->fetch();
     }
      public function  Member_Member()
    {
     
         return  $this->fetch();
     }
      public function  Member_Results()
    {
     
         return  $this->fetch();
     }
         public function  Member_Commission()
    {
     
         return  $this->fetch();
     }
           public function  Member_Cash()
    {
     
         return  $this->fetch();
     }










}