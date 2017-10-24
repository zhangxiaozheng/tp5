<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\order;
class Indent extends Controller
{
  protected $order;
	public function __construct() 
	{
			$this->order = new order;
			parent::__construct();
	}
  //收货详情的页面
  public function order_list()
  {
    $rr = $this->order->dingdan();
    $this->assign('rr',$rr);
    return $this->fetch();
  }
  //订单列表的页面
  public function order_detail()
  {
    $rr = $this->order->dingdan();
    $this->assign('rr',$rr);
    return $this->fetch();
  }
  //statu状态修改为1 已付款
  public function yifukuan()
  {
      $id = $this->request->param('id');
      $ree = $this->order->yifukuan($id);
      if($ree){
          return ['code' => 1];
      }else{
          return ['code' => 0];
      }
  }
  //statu状态修改为2 配货中
  public function peihuozhong()
  {
      $id = $this->request->param('id');
      $ree = $this->order->peihuozhong($id);
      if($ree){
          return ['code' => 1];
      }else{
          return ['code' => 0];
      }
  }
  //statu状态修改为3 已发货
  public function yifahuo()
  {
      $id = $this->request->param('id');
      $ree = $this->order->yifahuo($id);
      if($ree){
          return ['code' => 1];
      }else{
          return ['code' => 0];
      }
  }
  //statu状态修改为4 已收货
  public function yishouhuo()
  {
      $id = $this->request->param('id');
      $ree = $this->order->yishouhuo($id);
      if($ree){
          return ['code' => 1];
      }else{
          return ['code' => 0];
      }
  }
  //statu状态修改为5 订单完成
  public function dingdanwancheng()
  {
      $id = $this->request->param('id');
      $ree = $this->order->dingdanwancheng($id);
      if($ree){
          return ['code' => 1];
      }else{
          return ['code' => 0];
      }
  }
}