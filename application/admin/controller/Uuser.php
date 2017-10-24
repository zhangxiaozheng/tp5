<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\permission as perm;
use app\admin\model\userAdmin as user;
use app\admin\model\role;
class Uuser extends Controller
{
  protected $perm;
  protected $user;
  protected $role;
  public function __construct() 
  {
    $this->perm = new perm;
    $this->user = new user;
    $this->role = new role;
    parent::__construct();
  }
  //用户展示页面
  public function yonghuzhanshi()
  {
    $qw = $this->user->yonghu();
    $this->assign('qw',$qw);
    return $this->fetch();
  }
  //添加用户页面
  public function tianjiayonghu()
  {
    $role = $this->role->juese();
    $this->assign('role',$role);
    return $this->fetch();
  }
  //修改权限页面
  public function xiugaiquanxian()
  {
    $ee = $this->perm->dabankuai();
    $this->assign('ee',$ee);
    return $this->fetch();
  }
  //角色权限页面
  public function juesequanxian()
  {
    $re = $this->role->juese();
    $this->assign('re',$re);
    return $this->fetch();
  }
  //修改权限页面
  public function quanxianym()
  {
    $tt = $this->perm->dabankuai();
    $this->assign('tt',$tt);
    return $this->fetch();
  }
  //添加用户
  public function tianjia()
  {
    if(empty($_POST['username'] && $_POST['password'])){
      exit("<script>alert('用户名或密码不能为空');history.back();</script>");
    }else{
      $username = $this->request->param('username');
      $password = $this->request->param('password');
      $data = $this->user->tianjiauser($username,$password);
      if(!empty($data)){
        $dataa = [
          'user_id' => $data,
          'role_id' => $_POST['role_id'],
        ];
        $rer = Db::table('think_user_role')->insert($dataa);
      }
      if($rer){
        $this->error('插入成功',url('admin/Uuser/tianjiayonghu'));
      }
    }
  }
  //查询用户是否存在
  public function yonghuchaxun()
  {
    $adminuser = $this->request->param('g_name');
    $aa = $this->user->Mdouser($adminuser);
    if($aa){
      return ['code' => 1];
    }else{
      return ['code' => 0];
    }
  }
  //查询角色是否存在
  public function juesechaxun()
  {
    $username = $this->request->param('name');
    $bb = $this->role->chaxunjuese($username);
    if($bb){
      return ['code' => 1];
    }else{
      return ['code' => 0];
    }
  }
  //查询权限是否存在
  public function quanxianchaxun()
  {
    $name = $this->request->param('name');
    $bb = $this->perm->quanxianname($name);
    if($bb){
      return ['code' => 1];
    }else{
      return ['code' => 0];
    }
  }
  //添加角色页面
  public function tianjiajuese()
  {
    $juese = $this->role->juese();
    $this->assign('juese',$juese);
    return $this->fetch();
  }
  //添加角色功能
  public function juese()
  {
    if(empty($_POST['juese'])){
      exit("<script>alert('角色不能为空');history.back();</script>");
    }else{

      $po = $this->role->tjjuese($_POST);
      if($po){  
        $this->error('插入成功',url('admin/Uuser/tianjiajuese'));
      }else{
        $this->error('插入失败',url('admin/Uuser/tianjiajuese'));
      }
    }
  }
  //添加权限功能
  public function quanxian()
  {
    $ew = $this->perm->addquanxian($_POST);
    dump($_POST);
    if($ew){  
      $this->error('插入成功',url('admin/Uuser/xiugaiquanxian'));
    }else{
      $this->error('插入失败',url('admin/Uuser/xiugaiquanxian'));
    }
  }
  //给选中的角色添加权限
  public function tjqx()
  {
    if(empty($_POST)){
      exit("<script>alert('请选中后再操作。');history.back();</script>");
    }else{
      $perm_id = $this->perm->fg();//权限id
      $role_id = $_REQUEST['id'];//角色id
      $data = [
        'role_id' => $role_id,
        'permission_id' => $perm_id,
      ];
      $rer = Db::table('think_role_permission')->insert($data);
      if($rer){
        $this->error('修改成功',url('admin/Uuser/juesequanxian'));
      }else{
        $this->error('修改失败',url('admin/Uuser/juesequanxian'));
      }
    }
  }
}