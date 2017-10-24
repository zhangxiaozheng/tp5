<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class goods extends Model{
	//手机专区
	public function one()
	 {
	 	return Db::name('goods')->where('goods_parent',8)->limit(1,8)->order('pice','desc')->select();
	 	 
	 }
	 //手机专区价格冠军
	public function two()
	 {
	 	return Db::name('goods')->where('goods_parent',8)->limit(1)->order('pice','desc')->select();
	 	 
	 }
	 //耳机销量冠军
	 public function erji()
	 {
	   return Db::name('goods')->where('goods_parent',16)->limit(1)->order('sales','desc')->select();
	 
	 }
	 // 耳机价格前八名
	 public function erji1()
	 {
	 	return Db::name('goods')->where('goods_parent',16)->limit(1,8)->order('pice','desc')->select();
	  
	 }
	 //电源销量最高
	 public function yi()
	 {
	 	return Db::name('goods')->where('goods_parent',11)->limit(1)->order('sales','desc')->select();
	  
	 }
	 //电视价格前八名
	 public function tv()
	 {
	 	return Db::name('goods')->where('goods_parent',12)->limit(1,8)->order('pice','desc')->select();
	  
	 }
	  //路由器价格前八名
	  public function luyou()
	  {
	  	return Db::name('goods')->where('goods_parent',15)->limit(1,8)->order('pice','desc')->select();
	  	 
	  }
	  //手机保护套价格前八名
	  public function bao()
	  {
	  	return Db::name('goods')->where('goods_parent',18)->limit(1,8)->order('pice','desc')->select();
	  	  
	  }
	    //手机膜价格前八名
	  public function mo()
	  {
	  	$re5= Db::name('goods')->where('goods_parent',19)->limit(1,8)->order('pice','desc')->select();
	  	return $re5;
	  }
	  //智能专区冠军
	  public function zn()
	  {
	  	return Db::name('goods')->where('goods_parent',13)->limit(1)->order('sales','desc')->select();

	  }
	  //手机壳专区冠军
	  public function shoe()
	  {
	    return Db::name('goods')->where('goods_parent',20)->limit(1)->order('sales','desc')->select();
	  	
	  }
	   //手机膜专区冠军
	  public function ar()
	  {
	  	return Db::name('goods')->where('goods_parent',21)->limit(1)->order('sales','desc')->select();
	  
	  }
	    //喜爱专区前五
	  public function lov()
	  {
	     return Db::name('goods')->where('newproduce = 1')->limit(1,5)->order('sales','desc')->select();
	
	  }
	  //获取传过来的id获取单个商品信息
	  public function res($id)
	  {
	  	return Db::name('goods')->where("pid = $id")->select();
	  }
	  //获取传过来的id获取单个商品颜色
	  public function cor($id)
	  {
	  	return Db::name('color')->where("r_id = $id")->select();
	  }
	   //获取传过来的id获取单个商品规格
	  public function siz($id)
	  {
	  	return Db::name('size')->where("s_id = $id")->select();
	  }
	  //根据商品名称查询商品的id
	  public function gid($ttie)
	  {	
	  	// var_dump($ttie);
	  	 $ttie = Db::name('goods')->where("uname", $ttie)->select();
	  	 return $ttie = $ttie[0]['pid'];
	  }
	  //查询商品的id
	  public function ming($ttie)
	  {
	  	 $ming = Db::name('goods')->where("uname", $ttie)->select();
	  	 return $ming = $ming[0]['pid'];
	  }
	  //查询收藏宝贝的详细信息
	  public function shou($aid)
	  {
	  	return  Db::name('goods')->where("pid", $aid)->select();
	  }
	  //模糊搜索
	  public function neirong($text)
	  {
	  	return Db::name('goods')->where('uname','like',"%$text%")->select();
	
	  }
	  //同款类型喜欢推荐
	  public function kun($id)
	  {
	  	$kuan = Db::name('goods')->where("pid = $id")->select();
	  	$kuan1 =$kuan[0]['goods_parent'];
	  	return  Db::name('goods')->where("goods_parent = $kuan1")->order('id','desc')->limit(4)->select();
	  }
	  //查询首页轮播图
	  public function lun()
	  {
	  	return	Db::field('visvs.imges,goods.pid')
			->table(['think_visvs'=>'visvs','think_goods'=>'goods'])
			->where("visvs.mid = goods.pid")
			->select();

	  }
}