<?php
namespace app\admin\model;
use think\Model;
use think\Db; 
class goods extends Model
{
  public function goods()
  {
      $list = Db::name('goods')->where('pid', 23)->select();
    return $list;
  }
  //遍历商品
  public function shopShangPin($id)
  {
    $shop = Db::name('goods')->where('goods_parent',$id)->where('shelves',1)->paginate(50);
    return $shop;
  }
  //遍历回收商品
  public function huishoushangpin($id)
  {
    $huishou = Db::name('goods')->where('goods_parent',$id)->where('shelves',0)->paginate(50);
    return $huishou;
  }
  //查询添加商品是否重名
  public function doShop($uname)
  {
    return Db::name('goods')->where('uname',$uname)->value('uname');
  }
  //添加商品
  public function doInsert($uname,$pid,$pice,$sales,$parent_id,$aa)
  {
    $data = [

      'uname' => $uname,
      'pid' => $pid,
      'pice' =>$pice,
      'sales' =>$sales,
      'goods_parent' => $parent_id,
      'url' => $aa,
    ];
    $insert = Db::name('goods')->insert($data);
    return $insert;
  }
  //软删除商品
  public function upShelves($id)
  {
    $update = Db::name('goods')->where('id',$id)->update(['shelves' => 0]);
    return $update;
  }
  //软恢复
  public function huifushangpin($id)
  {
    $huifu = Db::name('goods')->where('id',$id)->update(['shelves' => 1]);
    return $huifu;
  }
  //彻底删除
  public function chedishanchu($id)
  {
    $shanchu = Db::table('think_goods')->where('id',$id)->delete();
    return $shanchu;
  }
  //遍历修改商品
  public function xiugaiShangPin($id)
  {
    $shop = Db::name('goods')->where('id',$id)->where('shelves',1)->paginate(50);
    return $shop;
  }
  //商品修改
  public function shangpinxiugai($id,$uname,$pid,$pice,$sales)
  {
    return Db::name('goods')->where('id',$id)->update([
      'uname' => $uname,
      'pid' => $pid,
      'pice' =>$pice,
      'sales' =>$sales,
    ]);
  }
}