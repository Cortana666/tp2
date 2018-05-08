<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\validate\Admin as AdminValidate;
  use app\admin\model\Admin as AdminModel;

  class Admin extends Common
  {
      public function lst()
      {
        $admin = new AdminModel();
        $res = $admin -> getadmin();
        $this->assign('adminres',$res);
        return view();
      }

      public function add()
      {
        if (request() -> isPost()) {
          $admin = new AdminModel();
          $data = input('post.');
          $validate = new AdminValidate();
          if(!$validate->scene('add')->check($data)){
              $this -> error($validate->getError());
          }
          $res = $admin -> addadmin($data);
          if ($res) {
            $this -> success('添加管理员成功！', url('lst'));
          }else {
            $this -> error('添加管理员失败！', url('lst'));
          }
          return;
        }
        return view();
      }

      public function edit($id)
      {
        $admin = new AdminModel;
        $adminres = $admin -> editAdmin($id);
        if (request()->isPost()) {
          $data = input('post.');
          $validate = new AdminValidate();
          if(!$validate->scene('edit')->check($data)){
              $this -> error($validate->getError());
          }
          if ($admin -> saveAdmin($data,$adminres) !== false) {
            $this -> success('修改管理员成功！', url('lst'));
          }else {
            $this -> error('修改管理员失败！');
          }
        }
        if (!$admin) {
          $this -> error('该管理员不存在！');
        }
        $this->assign('adminres',$adminres);
        return view();
      }

      public function del($id)
      {
        $admin = new AdminModel();
        if ($admin -> delAdmin($id)) {
          $this -> success('删除管理员成功！', url('lst'));
        }else {
          $this -> error('删除管理员失败！', url('lst'));
        }
      }

      public function logOut() {
        Session::delete('id');
        Session::delete('name');
        $this -> success('退出成功！',url('login/index'));
      }
  }
