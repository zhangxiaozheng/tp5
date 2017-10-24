<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class collect extends Model{
	//收藏商品
	public function  zan($data1)
	{
	  return Db::name('user')->where("username = '$data1'")->select();
	}
	public function  cang($data1)
	{
	  return Db::name('collect')->insert($data1);
	}
	public function zan1($uid)
	{
		// 查询收藏的内容
		return	Db::field('collect.cpice,collect.id,collect.cname,goods.url')
			->table(['think_collect'=>'collect','think_goods'=>'goods'])
			->where("collect.oid = $uid")
			->where("goods.pid = collect.eid")
			->select();
	}
	//删除收藏
	public function sn($id)
	{
		return Db::name('collect')->where("id = $id")->delete();
	}
}