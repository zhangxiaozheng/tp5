<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\index\model\Shop;
use app\index\model\Goods;
class Index  extends Controller
{	
	protected $shop;
    protected $goods;
	public function _initialize()
    {

        $this ->shop = new Shop();
        $this ->goods = new Goods();
    }
    public function index()
    {
    	//一级分类
    	$result = $this->shop->lis();
    	//二级分类
    	$two= $this->shop->liss(); 
        //三级分类
    	$three = $this->shop->cha();  
        //小米手机专区
        $phone = $this->goods->one();
        //手机专区价格冠军
        $phone1 = $this->goods->two();
        //耳机专区销量冠军
        $erji = $this->goods->erji();
        //耳机专区价格前八
        $erji1 = $this->goods->erji1();
        //耳机电源销量第一
        $yi = $this->goods->yi();
        //电视专区价格前八名
        $tv = $this->goods->tv();
        //路由器专区价格前八名
        $luyou = $this->goods->luyou();
        //手机套专区价格前八名
        $bao = $this->goods->bao();
        //手机膜专区价格前八名
        $mo = $this->goods->mo();
        //小米智能专区冠军
        $zn = $this->goods->zn();
         //手机壳专区冠军
        $shoe = $this->goods->shoe();
         //手机膜专区冠军
        $ar = $this->goods->ar();
        //喜爱专区
        $lov = $this->goods->lov();
        //首页轮播图
        $lu =$this->goods->lun();  
         $this->assign('lu',$lu);
         $this->assign('lov',$lov);
         $this->assign('ar',$ar);
         $this->assign('shoe',$shoe);
         $this->assign('zn',$zn);
         $this->assign('yi',$yi);
         $this->assign('mo',$mo);
         $this->assign('bao',$bao);
         $this->assign('luyou',$luyou);
         $this->assign('tv',$tv);
         $this->assign('erji',$erji);
         $this->assign('erji1',$erji1);
         $this->assign('phone',$phone);
         $this->assign('phone1',$phone1);
    	 $this->assign('two',$two);
    	 $this->assign('result',$result);
    	 $this->assign('three',$three);
    	 $name = Session::get('username');
         $this->assign('name',$name);
         return  $this->fetch();
    }
}
