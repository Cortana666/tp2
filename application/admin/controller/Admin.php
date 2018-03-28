<?php
  namespace app\admin\controller;
  use think\Controller;
  use app\admin\model\Admin as AdminModel;

  class Admin extends Controller
  {
      public function lst()
      {
        $res = db('admin') -> select();
        dump($res);die;
        return view();
      }
      public function add()
      {
        if (request() -> isPost()) {
          $admin = new AdminModel();
          $res = $admin -> addadmin(input('post.'));
          if ($res) {
            $this -> success('添加管理员成功！', url('lst'));
          }else {
            $this -> error('添加管理员失败！', url('lst'));
          }
          return;
        }
        return view();
      }
      public function edit()
      {
        return view();
      }
  }
