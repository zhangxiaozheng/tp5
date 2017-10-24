
<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use app\index\model\Shop;
use app\index\model\Goods;
class Lists extends Controller
{
	protected $goods;
	protected $shop;
	public function _initialize()
    {
        $this ->goods = new Goods();
        $this ->shop = new Shop();
     }
	 public function Brand_list()
    {
     	 $name = Session::get('username');
     	 //接受传过来的一级id
     	 $id = $_GET['id'];
     	 $lis = $this->shop->bin($id);
         // $page = $lis->render();
         //一级分类
         $result = $this->shop->lis();
         $this->assign('result',$result);
         $this->assign('lis',$lis);
         // $this->assign('page',$page);
         $this->assign('name',$name);
         return  $this->fetch();
     }
     //模糊搜索
     public function sousou()
    {
         $name = Session::get('username');
         //一级分类
         $result = $this->shop->lis();
         //接受搜索的内容
         $text = $_POST['text'];

         $text1 = $this->goods->neirong($text);


         $this->assign('text',$text1);
         $this->assign('result',$result);
         $this->assign('name',$name);
        return  $this->fetch();
    }
}