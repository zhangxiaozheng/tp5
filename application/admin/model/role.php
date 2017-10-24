<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class role extends Model
{
  //遍历角色
  public function juese()
  {
    $as = Db::name('role')->select();
    return $as;
  } 
  //查询角色是否存在
  public function chaxunjuese($username)
  {
    return Db::name('role')->where('name',$username)->select();
  }
  //添加角色
  public function tjjuese($post)
  {
    $juese = $_POST['juese'];
    $data = [
      'name' => $juese,
    ];
    $aa = Db::name('role')->insert($data);
    return $aa;
  }
}