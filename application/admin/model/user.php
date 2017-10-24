<?php
namespace app\admin\model;
use think\Model;
use think\Db; 
use  think\Paginator;
class user extends Model
{
  
  //遍历会员
  public function huiyuan()
  {
    $aa = Db::name('user')->where('u_id','>',1)->paginate(5);
    return $aa;
  }
  //会员锁定
  public function suoding($uid)
  {
    return Db::name('user')->where('u_id',$uid)->update(['locked'=>1]);
  }
  //会员解锁
  public function jiesuo($uid)
  {
    return Db::name('user')->where('u_id',$uid)->update(['locked'=>0]);
  }
  //删除会员
  public function shanchu($uid)
  {
    return Db::table('think_user')->where('u_id',$uid)->delete();
  }
  //三表联查查会员评价
  public function pingjia()
  {
    return Db::field('goods.url,goods.uname,goods.pid,user.username,comment.content,comment.id')
    ->table(['think_user'=>'user','think_goods'=>'goods','think_comment'=>'comment'])
    ->where('user.u_id=comment.cu_id')
    ->where('goods.id=comment.gs_id')
    ->select();
  }
  //删除会员评价
  public function shanchupj($id)
  {
    return Db::name('comment')->where('id',$id)->delete();
  }
}