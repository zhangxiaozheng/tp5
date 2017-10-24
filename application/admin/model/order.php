<?php
namespace app\admin\model;
use think\Model;
use think\Db; 
class order extends Model
{
  //user表 order表 shouhuo表三表联查
  public function dingdan()
  {
    return Db::field('user.username,
    order.ord_hao,
    shouhuo.sname,
    shouhuo.sphone,
    shouhuo.infomation,
    order.o_money,
    order.kuaidi,
    order.ka,
    order.create_time,
    order.statu,
    order.ss_name,
    order.color,
    order.size,
    order.id,
    shouhuo.dingdanbianhao,
    order.info')->table(['think_user'=>'user',
    'think_order'=>'order',
    'think_shouhuo'=>'shouhuo'])
    ->where('user.u_id=shouhuo.yyid')
    ->where('shouhuo.yyid=order.o_id')
    ->where('order.ord_hao=shouhuo.dingdanbianhao')
    ->select();
  }
  //statu状态修改为1 已付款
  public function yifukuan($id)
  {
    $huifu = Db::name('order')->where('id',$id)->update(['statu' => 1]);
    return $huifu;
  }
  //statu状态修改为2 配货中
  public function peihuozhong($id)
  {
    $huifu = Db::name('order')->where('id',$id)->update(['statu' => 2]);
    return $huifu;
  }
  //statu状态修改为3 已发货
  public function yifahuo($id)
  {
    $huifu = Db::name('order')->where('id',$id)->update(['statu' => 3]);
    return $huifu;
  }
  //statu状态修改为4 已收货
  public function yishouhuo($id)
  {
    $huifu = Db::name('order')->where('id',$id)->update(['statu' => 4]);
    return $huifu;
  }
  //statu状态修改为5 订单完成
  public function dingdanwancheng($id)
  {
    $huifu = Db::name('order')->where('id',$id)->update(['statu' => 5]);
    return $huifu;
  }
}