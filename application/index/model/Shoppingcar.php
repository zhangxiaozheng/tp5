<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class shoppingcar extends Model{

	  //插入购物车数据库	
	  public function one($arr)
	  {
	  	return Db::name('shoppingcar')->insert($arr);
	  }
	  //查询个人购物详情
	  public function two($gid)
	  {
	  	// 查询购物详情
		return	Db::field('shoppingcar.ptitle,shoppingcar.money,goods.url,shoppingcar.nums')
			->table(['think_shoppingcar'=>'shoppingcar','think_goods'=>'goods'])
			->where("shoppingcar.wid = goods.pid")
			->where("shoppingcar.spid = $gid")
			->select();
	  }
	  //查看购物车订单
	  public function che($name)
	  {	
	  	return	Db::field('shoppingcar.ptitle,shoppingcar.money,goods.url,shoppingcar.nums,shoppingcar.pcolor,shoppingcar.id,shoppingcar.psize')
			->table(['think_shoppingcar'=>'shoppingcar','think_goods'=>'goods','think_user'=>'user'])
			->where("shoppingcar.wid = goods.pid")
			->where("shoppingcar.spid = user.u_id")
			->where("user.username = '$name'")
			->select();
	  }
	  //删除单个商品 
	  public function san($id)
	  {
	  	// var_dump($id);
	  	return Db::name('shoppingcar')->where("id = $id")->delete();

	  }
	  //处理订单信息
	  public function chu($arr)
	  {
	  	$zhi = implode(',',$arr);
	  	return  Db::name('shoppingcar')->where("id in" . "(" . "$zhi" . ")")->select();
	 
	  }
	  
}