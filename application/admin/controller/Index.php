<?php
namespace app\admin\controller;
use think\Db;
use think\Model;
use think\Controller;
use think\Loader;
use thnik\Request;
use app\admin\model\goods;
use app\admin\model\shop;
use app\admin\model\permission;
use app\admin\model\userAdmin as user;
class Index extends Controller
{
    protected $goods;
    protected $erji;
    protected $permission;
    protected $user;
    public function __construct() {
        $this->goods = new goods;
        $this->erji = new shop;
        $this->permission = new permission;
        $this->user = new user;
        parent::__construct();
    }
    public function index()
    {
        /* $view = new View(); */
        /* $view->name = '123'; */
        /* $data['aa'] = 22;
        $view->assign('data',$data); */
       /*  $a['q'] = 52;
        $this->assign('a',$a); */
       /*  $a = new Lay;
        $a->get_lay($this); */
        return $this->fetch();
    }
    //商品展示
    public function product_list()
    {
        
        $erjifl = $this->erji->shopp();
        $list = $this->goods->goods();
        //$shangpin = $this->goods->shopShangPin();
        //$page = $shangpin->render();
        //dump($list);
        $id = $this->request->param('id');
        $res = $this->goods->shopShangPin($id);
        $page = $res->render();
        $this->assign('page',$page);
        $this->assign('erji', $erjifl);
        //$this->assign('page', $page);
        //$this->assign('shangpin', $shangpin);
        $this->assign('list', $list);
        return $this->fetch();
    }
    //添加商品页面
    public function product_detail()
    {
        $erji = $this->erji->shopp();
        $this->assign('erji',$erji);
        return $this->fetch();
    }
    //回收商品展示
    public function recycle_bin()
    {
        $erji = $this->erji->shopp();
        $this->assign('erji',$erji);
        return $this->fetch();
    }
    //接收添加商品信息
    public function detail()
    {
        $request = new goods;
        $uname = $this->request->param('uname');
        $name = $request->doShop($uname);
        if($name){
            return ['code' => 1];
        }else{
            return ['code' => 0];
        }
    }
    //添加商品
    public function tianjia()
    {
        $uname = $this->request->param('spuname');
        $pid = $this->request->param('sppid');
        $pice = $this->request->param('sppice');
        $sales = $this->request->param('spsales');
        $parent_id = $this->request->param('parent_id');
        $file = $this->request->file('image');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
        $aa = $info->getFilename();
        $jiaru = $this->goods->doInsert($uname,$pid,$pice,$sales,$parent_id,$aa);
        if($jiaru){
            $this->success("添加成功",url('admin/index/product_detail'));
        } else{
            $this->success("添加失败",url('admin/index/product_detail'));;
        }
    }
    //图片上传
    public function tupian()
    {
        //ChromePhp::log($_FILES['file']);  // for debug
        
        $user_uid = rand(0, 50000);
        $file_pos = strpos($_FILES['file']['name'], '.');
        $file_name = $user_uid . '.' . substr($_FILES['file']['name'], $file_pos + 1);
        $savePath = dirname('__UPLOAD_PATH__/tupian/') . '\\' . $file_name;
        copy($_FILES['file']['tmp_name'], $savePath);
    }
    //商品展示点哪个二级展示他的三级
    public function g_list()
    {
        $id = $this->request->param('id');
       $res = $this->goods->shopShangPin($id);
       $page = $res->render();
       $this->assign('page',$page);
       $this->assign('shangpin', $res);
       return $this->fetch();       
    }
    //回收商品展示点哪个二级展示他的三级
    public function h_list()
    {

        $id = $this->request->param('id');
        $re = $this->goods->huishoushangpin($id);
        $this->assign('shangpin',$re);
        return $this->fetch();
    }
    //软删除
    Public function ruandelete()
    {
        
        $id = $this->request->param('id');

        $re = $this->goods->upShelves($id);
        if($re){
            return ['code' => 1];
        }else{
            return ['code' => 0];
        }
        
    }
    //软恢复商品
    public function shangpinhuifu()
    {
        $id = $this->request->param('id');
        $ree = $this->goods->huifushangpin($id);
        if($ree){
            return ['code' => 1];
        }else{
            return ['code' => 0];
        }
    }
    //彻底删除商品
    public function deleteshop()
    {
        $id = $this->request->param('id');
        $shan = $this->goods->chedishanchu($id);
        if($shan){
            return ['code' => 1];
        }else{
            return ['code' => 0];
        }
    }
    public function htym()
	{
		return $this->fetch();
	}
	public function top()
	{
		return $this->fetch();
	}
	public function left()
	{
        $da = $this->user->dbk();
        $xiao = $this->user->xbk();
        $this->assign('da',$da);
        $this->assign('xiao',$xiao);
		return $this->fetch();
    }
    //商品修改页面展示
    public function shangpinxiugai()
    {
        $id = $this->request->param('id');
        $erji = $this->goods->xiugaiShangPin($id);
        $this->assign('erji',$erji);
        return $this->fetch();
    }
    //商品修改功能
    public function spxg()
    {
        $id = $this->request->param('id');
        $uname = $this->request->param('spuname');
        $pid = $this->request->param('sppid');
        $pice = $this->request->param('sppice');
        $sales = $this->request->param('spsales');
        $shan = $this->goods->shangpinxiugai($id,$uname,$pid,$pice,$sales);
        dump($id);
        dump($shan);
        if($shan){
            $this->success("修改成功",url('admin/index/product_list'));
        }else{
            $this->success("修改成功",url('admin/index/product_list'));
        }
        return $this->fetch();
    }
}
