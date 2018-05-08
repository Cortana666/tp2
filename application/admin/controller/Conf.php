<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\validate\Conf as ConfValidate;
  use app\admin\model\Conf as ConfModel;

  class Conf extends Common
  {
      public function lst()
      {
        $conf = new ConfModel();
        if (request()->isPost()) {
          $data = input('post.');
          $conf -> confLst($data);
        }
        $res = db('conf') -> order('sort') -> paginate(10);
        $this -> assign('confres',$res);
        return view();
      }

      public function add(){
        $conf = new ConfModel();
        if (request()->isPost()) {
          $data = input('post.');
          if ($data['values']) {
            $data['values'] = str_replace("，",",",$data['values']);
          }
          // $validate = new ConfValidate();
          // if(!$validate->scene('add')->check($data)){
          //     $this -> error($validate->getError());
          // }
          if ($conf -> save($data)) {
            $this -> success('添加配置成功！',url('lst'));
          }else {
            $this -> error('添加配置失败！');
          }
        }
        return view();
      }

      public function del($id) {
        $conf = new ConfModel();
        $res = $conf -> where('id','=',$id) -> delete();
        if ($res) {
          $this -> success('删除配置成功！',url('lst'));
        }else {
          $this -> error('删除配置失败！',url('lst'));
        }
      }

      public function edit($id) {
        $conf = new ConfModel();
        if (request()->isPost()) {
          $data = input('post.');
          if ($data['values']) {
            $data['values'] = str_replace("，",",",$data['values']);
          }
            // $validate = new ConfValidate();
            // if(!$validate->scene('edit')->check($data)){
            //     $this -> error($validate->getError());
            // }
          if (false !== $conf -> save($data,['id' => $data['id']])) {
            $this -> success('修改配置成功！',url('lst'));
          }else {
            $this -> error('修改配置失败！');
          }
        }
        $res = $conf -> where('id',$id) -> find();
        $this -> assign('conf',$res);
        return view();
      }

      public function conf()
      {
        if (request()->isPost()) {
          $data = input('post.');
          $conf = new ConfModel;
          $res = $conf->editConf($data);
          if ($res) {
            $this -> success('修改配置项成功！',url('lst'));
          }else {
            $this -> error('修改配置项失败！');
          }
        }
        $res = ConfModel::order('sort') -> select();
        $this -> assign('confres',$res);
        return view();
      }
  }
