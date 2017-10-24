<?php
namespace app\admin\model;
use think\Model;
use think\Db; 
class shop extends Model
{
  public function shopp()
  {
    $shop = Db::name('shop')->where('level',2)->select();
    /*foreach($shop as $k => $v){
      $shop[$k]['ch1'] = 
    }*/
    return $shop;
  }
  
}