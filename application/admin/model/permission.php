<?php
namespace app\admin\model;
use think\Model;
use think\Db; 
class permission extends Model
{
  //查询权限功能
  public function quanxian()
  {
    $ee = Db::name('permission')->select();
    return $ee;
  }
  //查询权限大板块
  public function dabankuai()
  {
    return Db::name('permission')->where('parent',0)->select();
  }
  //添加权限
  public function addquanxian($post)
  {
    $name = $_POST['name'];
    $url = $_POST['url'];
    if($_POST['parent'] == 0){
      $parent = 0;
      $data = [
        'name' => $name,
        'url' => $url,
        'parent' => $parent,
      ];
      return Db::name('permission')->insert($data);
    } else{
      $parent = $_POST['parent'];
      $data = [
        'name' => $name,
        'url' => $url,
        'parent' => $parent,
      ];
      return Db::name('permission')->insert($data);
    }
  }
  //查询权限是否存在
  public function quanxianname($name)
  {
    return Db::name('permission')->where('name',$name)->select();
  }
  //分隔选中的权限
  public function fg()
  {
    $inser = $_POST['insert'];
    $insert = join(',',$inser);
    return $insert;
  }
}