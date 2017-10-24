<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\index\model\Shop;
use app\index\model\User;
use app\index\model\Goods;
use app\index\model\Picture;
use app\index\model\Comment;
use app\index\model\Collect;
use app\index\model\Shoppingcar;
class Good extends Controller
{
    protected $user;
    protected $shop;
    protected $goods;
    protected $picture;
    protected $comment;
    protected $collect;
    protected $shoppingcar;
	public function _initialize()
    {
        $this ->user = new User();
        $this ->shop = new Shop();
        $this ->goods = new Goods();
        $this ->picture = new Picture();
        $this ->comment = new Comment();
        $this ->collect = new Collect();
        $this ->shoppingcar = new Shoppingcar();
    }
	 public function Product()
    {
    	//获取具体商品的id
    	$id = $_GET['pid'];
       //id传到goods表里查询详情
       $info = $this->goods->res($id);
      //id传到picture表里查询详情
      $result = $this->picture->res1($id);
      //picture表里的信息
      foreach ($result as $key => $value1) {
          $frontview = $value1['frontview'];
          $left1 = $value1['leftone'];
          $left2 = $value1['lefttwo'];
          $right1 = $value1['rightone'];
          $right2 = $value1['righttwo'];
          $bigpic1 = $value1['bigpic1'];
          $bigpic2 = $value1['bigpic2'];
          $bigpic3 = $value1['bigpic3'];
      }
      //goods表里的信息
       foreach ($info as $key => $value) {
       		$title = $value['uname'];
       		$pice = $value['pice'];
       }
       //查询评论的内容
        $info1 = $this->comment->comm($id);
        //获取商品的颜色
        $color = $this->goods->cor($id);
        //获取商品的规格
        $size = $this->goods->siz($id);
        //查询个人购物车里的东西
        if (!empty(Session::get('username'))){
            //用户名
            $una = Session::get('username');
            //查询用户的id
              $gid = $this->user->gouwu($una); 
            //根据用户id去查询购物车
            $gouwu = $this->shoppingcar->two($gid); 
            // var_dump($gouwu);
            //购物车总价格
            $arr = [];
            foreach ($gouwu as $key => $vue) {
                $pice1 = $vue['money'];
                $n =  $vue['nums'];
                $arr[] = $pice1 * $n;
            }
            $sum = (array_sum($arr)); 
            $this->assign('gouwu',$gouwu);
            $this->assign('sum',$sum);
            }
          //一级分类
         $result = $this->shop->lis();
         //用户同款类型喜欢推荐
         $ku = $this->goods->kun($id);
         
         $this->assign('ku',$ku);
         $this->assign('result',$result);
         $this->assign('id',$id);
         $this->assign('color',$color);
         $this->assign('size',$size);
         $this->assign('info1',$info1);
         $this->assign('bigpic3',$bigpic3);
         $this->assign('bigpic2',$bigpic2);
         $this->assign('bigpic1',$bigpic1);
         $this->assign('left1',$left1);
         $this->assign('left2',$left2);
         $this->assign('right1',$right1);
         $this->assign('right2',$right2);
         $this->assign('frontview', $frontview);
       	 $this->assign('pice',$pice);
       	 $this->assign('title',$title);
         $name = Session::get('username');
         $this->assign('name',$name);
         $this->assign('id',$id);
         return  $this->fetch();
     }
        //接受表单传过来的评论内容
      public function pinglun()
      {
        if (!empty(Session::get('username'))){
            $uname = Session::get('username');
            // var_dump($uname);
            //商品id
            $gid = input('post.id');
            //好评
            $xu = input('post.radio');
            //评论内容
            $neirong = input('post.conten');
            switch ($xu) {
              case 1:
                $Highpraise = 1;
                $mediumreview = null;
                $negativecomment = null;
                break;
              case 2:
                $Highpraise = null;
                $mediumreview = 1;
                $negativecomment = null;
                break;
              case 3:
                $Highpraise = null;
                $mediumreview = null;
                $negativecomment = 1;
                break;
              default:
                # code...
                break;
            }
            //用户的信息
            $uid = $this->user->where("username = '$uname'")->select();
            foreach ($uid as $key => $value) {
              $usid = $value['u_id'];
            }
            //插入数据
            $data = [
              'cu_id' => $usid,
              'gs_id' => $gid,
              'content'  => $neirong,
              'Highpraise' =>  $Highpraise,
              'mediumreview' => $mediumreview,
              'negativecomment' => $negativecomment,
               'retime' => time()
            ];
             $result = $this->comment->insert($data);
             if ($result) {
               $this->success('发表评论成功','/index/index/index');
             } else {
              $this->success('发表评论失败','/index/index/index');
             }
      }else{
         $this->success('请够买后在评论','/index/index/index');
      }
    }   
    public function ue()
    {   
          if (!empty(Session::get('username'))){
            //商品名称
             $ttie = input('post.ttie');
            //根据商品的名称去查商品的id
            $ming = $this->goods->ming($ttie);
            //商品价格
             $pee = input('post.pee');
             //商品颜色
             $colorr = input('post.colorr');
             //商品数量
             $nums = input('post.nums');
             //商品的规格
              $sizee = input('post.sizee');
            //用户名
            $uname1 = Session::get('username');
             //根据商品名去查商品的id
             $id = $this->goods->gid($ttie);
            //查询用户的id
              $uid = $this->user->uid($uname1);
            //插入数据
            $arr = [
              'spid' => $uid,
              'ptitle' =>$ttie,
              'nums' =>$nums,
               'wid' => $ming,
              'money'  => $pee,
              'pcolor' => $colorr,
              'psize' => $sizee,
              'rgetime' => time()
            ];
             $result2 = $this->shoppingcar->one($arr);
              if ($result2) {
               $this->success('添加购物车成功','/index/index/index');
             } else {
              $this->success('添加购物车失败','/index/index/index');
             }

          } else {
               $this->success('请登录之后在添加商品','/index/index/index');
          }
    }
    //收藏商品
    public function collect()
    {
       if (!empty(Session::get('username'))){
          $username = Session::get('username');
          //根据用户名去查询用户的id
          $us = $this->user->usd($username);
          //用户id
          $uid = $us[0]['u_id'];
         //获取商品的id
         $aid = ($_POST['aid']);
         $shouchang = $this->goods->shou($aid);
         foreach ($shouchang as $key => $value) {
           //商品的id 
            $sid = $value['pid'];
           //商品的名字
           $uname = $value['uname'];
           //商品的价格
           $pice = $value['pice']; 
         }
         //插入收藏表
          $data1 = [
                  'cname' => $uname,
                  'cpice' => $pice,
                  'eid'  => $sid,
                  'oid' => $uid
                ];
        $result3 = $this->collect->cang($data1);
         if ($result3) {
            $this->success('收藏商品成功','/index/index/index');
         } else {
             $this->success('收藏商品失败','/index/index/index');
         }

           } else {
               $this->success('请登录之后在收藏商品','/index/index/index');
           }
     }
}





