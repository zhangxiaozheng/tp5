<?php
namespace app\app_extend\controller\miaosha;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
       echo  $this->fetch();
    }
}
