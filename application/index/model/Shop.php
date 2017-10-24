<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
// use think\Paginator;
class shop extends Model{

	public function lis()
	{
		//一级分类名称
		return Db::name('shop')->select();		
		
	}
	public function liss()
	{	//二级分类名称
		return Db::name('shop')->where('shop_parent != 0')->select();
		 
	}
	public function cha()
	{
		//三级分类名称
		return Db::name('shop')->select();		
		 
	}
	//遍历商品列表
	public function bin($id)
	{
		return  Db::field('goods.pice,goods.uname,goods.url,goods.pid')
		->table(['think_shop'=>'shop','think_goods'=>'goods'])
		->where("shop.shop_id = goods.goods_parent")
		->where("shop.shop_parent = $id")
		->select();
	}
	
}
