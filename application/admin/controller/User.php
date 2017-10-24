<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\user as us;
class User extends Controller
{
	protected $us;
	public function __construct() 
	{
			$this->us = new us;
			parent::__construct();
	}
	public function user_list()
	{
		$aa = $this->us->huiyuan();
		$page = $aa->render();
		$this->assign('aa',$aa);
		$this->assign('page',$page);
		return $this->fetch();
	}
	public function user_detail()
	{
		return $this->fetch();
	}
	public function adjust_funding()
	{
		return $this->fetch();
	}
	//用户评价商品页面
	public function user_rank()
	{
		$we = $this->us->pingjia();
		$this->assign('we',$we);
		return $this->fetch();
	}
	//锁定会员
	public function suoding()
	{
		$uid = $this->request->param('uid');
		$ee = $this->us->suoding($uid);
		if($ee){
			return ['code' => 1];
	}else{
			return ['code' => 0];
	}
	}
	//解除锁定
	public function jiesuo()
	{
		$uid = $this->request->param('uid');
		$ee = $this->us->jiesuo($uid);
		if($ee){
			return ['code' => 1];
	}else{
			return ['code' => 0];
	}
	}
	//删除会员
	public function shanchu()
	{
		$uid = $this->request->param('uid');
		$ee = $this->us->shanchu($uid);
		if($ee){
			return ['code' => 1];
		}else{
			return ['code' => 0];
		}
	}
	//删除会员评价
	public function shanchupj()
	{
		$id = $this->request->param('id');
		$sw = $this->us->shanchupj($id);
		if($sw){
			return ['code' => 1];
		}else{
			return ['code' => 0];
		}
	}
}
/*
一对一关联：
	1.创建关联模型
	2.在你主表里面增加 对应外键
	3.正常通过主表获取数据  $user->profile->adds;
	定义相对的关联

*/