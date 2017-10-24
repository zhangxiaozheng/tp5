<?php
namespace app\admin\controller;
use think\Db;
use think\Model;
use think\Controller;
use app\admin\model\permission as pub;
class Publicc extends Controller
{
  protected $pub;
  public function __construct()
  {
    $this->pub = new pub;
    parent::__construct();
  }
  public function layout()
  {
    $cx = $this->pub->cx();
    $cxx = $this->pub->cxx();
    $this->assign('cx',$cx);
    $this->assign('cxx',$cxx);
    // return $this->fetch();
  }
}