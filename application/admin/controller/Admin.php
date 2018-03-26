<?php
  namespace app\admin\controller;

  // use think\view;
  use think\controller;

  class Admin extends Controller
  {
      public function lst()
      {
        return view();

        // $view = new \think\view([
        //     'view_suffix'  => 'htm',
        // ]);
        // return $view -> fetch();

        // $view = new view([
        //     'view_suffix'  => 'htm',
        // ]);
        // return $view -> fetch();

        // return $this -> fetch();
      }
      public function add()
      {
        if (request() -> isPost()) {
          $res = db('admin') -> insert(input('post.'));
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
