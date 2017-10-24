<?php
namespace app\index\controller;
use think\Controller;
use think\Validate;
use think\Session;
use think\Ucpaas;
use app\index\model\User as UserModel;
class User extends Controller
{
     public function _initialize()
    {
        $this ->user = new UserModel();
    }
    //找回密码
    // public function password1()
    // {

    //      return  $this->fetch();

    // }











   //注册
    public function regist()
    {
        return  $this->fetch();
    }
    // 前台表单的数据
    public function one()
    {   
        //获取验证码
        $validate = new Validate(['captcha|验证码'=>'require|captcha']);
        $yzm = $this->request->param('yzm');
        $data = [
            'captcha' => $yzm
        ];
        if (!$validate->check($data)) {  
           $this->success('验证码输入有误','/index/user/regist');
        } 
         $result = $this->user->checkadd($_POST);
         if ($result) {
            $this->success('注册成功','/index/index/index');
         } else {
            $this->success('注册失败','/index/user/regist');
         }
    }
    public function two()
    {
        return $this->user->checkselect();
    }
    //登陆
     public function login()
    {
         return  $this->fetch();
     }
     public function denglu1()
     {
       return $this->user->checkdenglu();
     }
     //前台表单的信息
     public function denglu()
     {
      $result = $this->user->dengluselect($_POST);
      if (empty($result)) {
          $this->success('密码输入错误','/index/user/login');
      }


      if ($result & ($result[0]['locked'] == 0)) {
         $this->success('登陆成功','/index/index/index');
      } else if ($result & ($result[0]['locked'] == 1))  {
             session(null);
           $this->success('用户已被锁定,请联系管理员','/index/index/index');
         } else {
              $this->success('密码错误,登陆失败','/index/user/login');
         }
     }
     //用户退出
     public function out()
     {
        session(null);
        $this->success('退出成功','/index/index/index');
     }

     //忘记密码
     public function pass()
     {
        return  $this->fetch();
     }
     public function dbpass()
     {
        //查询用户
        $name = $_POST['userName'];
        session::set('na', $name); 
        $sh = $this->user->ch($name);
        if (empty($sh)) {
           $this->success('用户名输入错误','/index/user/pass');
        } else {
             // var_dump($sh);die;
           
            $this->success('用户验证通过','/index/user/pass1');
        }

     }
     public function pass1()
     {
        if (!empty($_POST['submit1'])) {
              $code = $_POST['code'];
             $code1 = Session::get('param');
        // var_dump($code1);die;
        // var_dump($code);die;
        if (empty($code)) {
            $this->success('验证不能为空','/index/user/pass1');
        }
        if ($code == $code1) {
            $this->success('验证通过','/index/user/pass2');
        } else {
            $this->success('验证输入有误','/index/user/pass1');
         }
        }
        return  $this->fetch();
     }
     public function pass2()
     {
        // dump($this->request->param());
        return  $this->fetch();
     }
     public function dbpass2()
     {
        if (!empty($_POST['tijiao'])) {
            $pas = $_POST['userName'];
            $pas1 = $_POST['ruserName'];
            if ($pas != $pas1) {
               $this->success('两次密码不一致','/index/user/pass2');
            } else {
                //用户名
                 $na = Session::get('na');
                 // var_dump($na);die;
               $pp = $this->user->zhao($na,$pas);
               if ($pp) {
                   $this->success('新密码修改成功','/index/user/pass3');
               } else {
                  $this->success('新密码修改失败','/index/user/pass2');
               }
            }
        }
     }
     public function pass3()
     {
        return  $this->fetch();
     }
     public function phonever()
    {
        $this->options['accountsid']='e38b4c1a759cb3c9937249f29bfa8d31';
        $this->options['token']='42fb393f64993a930f35f22c5d8e64a5';
        $appId = "f793ab3f7eda4dd7a6e578346f464e51";  
        $this->ucpaas = new Ucpaas($this->options);
        $to = '13401183285';                
        $templateId = "106902"; 
        $param = $this->randNum(); 
        session::set('param', $param); 
        $this->ucpaas->templateSMS($appId,$to,$templateId,$param);
    }
    public function randNum()
    {
        $str = '1234567890';
        $str = str_shuffle($str);
        return substr($str, 0, 4);
    }
 }
