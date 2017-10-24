<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class comment extends Model{
	//接受传过来的商品id
	public function comm($id)
	{
		// var_dump($id);
		// 查询评论的内容
		return	Db::field('user.username,order.color,order.size,comment.content,comment.retime')
			->table(['think_user'=>'user','think_comment'=>'comment','think_order'=>'order'])
			->where("user.u_id = comment.cu_id")->where("order.ss_id = comment.gs_id")->where("order.ss_id = $id")->where("order.statu = 3")
			->select();
	}



 }