<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;

class Login extends Controller
{
    public function index()
    {
      if (request()->isPost()) {
        $data = input('post.');
        $admin = new Admin();
        $num = $admin -> loginAdmin($data);
        if ($num == 1) {
          $this -> success('登陆成功！',url('index/index'));
        }elseif ($num == 0) {
          $this -> error('管理员不存在！');
        }elseif ($num == 2) {
          $this -> error('管理员密码错误！');
        }elseif ($num == 3) {
          $this -> error('管理员名称不能为空！');
        }
      }
      return view('login');
    }
}
