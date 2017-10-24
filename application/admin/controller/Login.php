<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\userAdmin;
class login extends Controller
{
  protected $guanly;
  //初始化
  public function _initialize()
  {
    $this->guanly = new userAdmin;
  }
  public function login()
  {
    return $this->fetch();
  }
  //ajax验证登录
  public function douser(userAdmin $guanly)
  {
    $adminuser = $this->request->param('g_name');
    $name = $guanly->Mdouser($adminuser);
    
    if($name){
      return ['code' => 1];
    }else{
      return ['code' => 0];
    }
    /* return db('userAdmin')->where('g_id',1)->find(); */
  }
  //验证密码
  public function dopwd(userAdmin $guanly)
  {
    /* dump(db('userAdmin')->where('g_id',1)->find()); */
    $adminuser = $this->request->param('g_name');
    $adminpassword = $this->request->param('g_password');
    $pwd = $guanly->Mdopassword($adminuser,$adminpassword);
    if($pwd == 1){
      session('guser',$adminuser);
      return json(['code' => 1]);
    }else{
      return json(['code' => 0]);
    }
  }
  //登录
  public function dologin()
  {
    $name = $this->request->param('g_name');
    $password = $this->request->param('g_password');
    var_dump($name);
    if(empty($name || $passwrod)){
      return json(['code' => 1]);
    }else{
      return json(['code' => 0]);
    }
  }
  //退出
  public function tuichu()
  {
    Session(null);
    $this->redirect('login/login');
  }
}