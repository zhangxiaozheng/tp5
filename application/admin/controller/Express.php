<?php
namespace app\admin\controller;
use think\Controller;
class express extends Controller
{
  public function express_list()
  {
    return $this->fetch();
  }
  public function pay_list()
  {
    return $this->fetch();
  }
}