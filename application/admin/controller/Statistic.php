<?php
namespace app\admin\controller;
use think\Controller;
class statistic extends Controller
{
  public function discharge_statistic()
  {
    return $this->fetch();
  }
  public function sales_volume()
  {
    return $this->fetch();
  }
}