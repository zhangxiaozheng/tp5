<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Session;
use think\Request;

class userAdmin extends Model
{
  //遍历用户
  public function yonghu()
  {
    return Db::name('user_admin')->select();
  }
  //查询管理员用户名
  public function Mdouser($adminuser)
  {
    /* return $this->where('g_name',$adminuser)->value('g_name'); */
    return $this->where('g_name',$adminuser)->value('g_name');
  }
  //查询管理员密码
  public function Mdopassword($adminuser,$adminpassword)
  {
    $pwd = $this->where('g_name',$adminuser)->value('g_password');
    if(empty($adminpassword)){
      return 0;
    }else{
        if($adminpassword == $pwd){
        return 1;
      }else{
        return 0; 
      }
    }
    
  }
  //添加用户
  public function tianjiauser($username,$password)
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = [
      'g_name' => $username,
      'g_password' => $password,
    ];
    $this->data($data);
    $this->save();
    return $this->g_id;
  }
  //五表联查遍历大板块
  public function dbk()
  {
    $username = Session::get('guser');
    $err = Db::field('user.g_id')->table(['think_user_admin' => 'user'])->where("g_name='$username'")->select();
    @$uid = $err[0]['g_id'];
    $result = Db::field('jsqx.permission_id')->table(['think_user_admin' =>'user','think_role'=>'role','think_user_role'=>'yhjs','think_permission'=>'perm','think_role_permission'=>'jsqx'])
    ->where("'$uid' = yhjs.user_id")
    ->where('yhjs.role_id = role.id')
    ->where('role.id = jsqx.role_id')
    ->where('jsqx.permission_id = perm.id')
    ->select();
    $re = $result[0]['permission_id'];
    $rer = explode(',',$re);
    $da = Db::field('perm.name,perm.id')->table(['think_permission'=>'perm'])->where('id','in',$rer)->select();
    return $da;
  }
  //五表联查遍历小版块
  public function xbk()
  {
    $username = Session::get('guser');
    $err = Db::field('user.g_id')->table(['think_user_admin' => 'user'])->where("g_name='$username'")->select();
    $uid = $err[0]['g_id'];
    $result = Db::field('jsqx.permission_id')->table(['think_user_admin' =>'user','think_role'=>'role','think_user_role'=>'yhjs','think_permission'=>'perm','think_role_permission'=>'jsqx'])
    ->where("'$uid' = yhjs.user_id")
    ->where('yhjs.role_id = role.id')
    ->where('role.id = jsqx.role_id')
    ->where('jsqx.permission_id = perm.id')
    ->select();
    $re = $result[0]['permission_id'];
    $xiao = Db::field('perm.url,perm.name,perm.id,perm.parent')->table(['think_permission'=>'perm'])->select();
    return $xiao;

  }

}