<?php
namespace app\admin\controller;
use think\Controller;
class setting extends Controller
{
  public function setting()
  {
    return $this->fetch();
  }
}