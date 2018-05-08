<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\validate\Link as LinkValidate;
  use app\admin\model\Link as LinkModel;

  class Link extends Common
  {
      public function lst()
      {
        $link = new LinkModel();
        if (request()->isPost()) {
          $data = input('post.');
          $link -> linkLst($data);
        }
        $res = db('link') -> order('sort') -> paginate(10);
        $this -> assign('linkres',$res);
        return view();
      }

      public function add(){
        $link = new LinkModel();
        if (request()->isPost()) {
          $validate = new LinkValidate();
          if(!$validate->scene('add')->check($data)){
              $this -> error($validate->getError());
          }
          $data = input('post.');
          if ($link -> save($data)) {
            $this -> success('添加链接成功！',url('lst'));
          }else {
            $this -> error('添加链接失败！');
          }
        }
        return view();
      }

      public function del($id) {
        $link = new LinkModel();
        $res = $link -> where('id','=',$id) -> delete();
        if ($res) {
          $this -> success('删除链接成功！',url('lst'));
        }else {
          $this -> error('删除链接失败！',url('lst'));
        }
      }

      public function edit($id) {
        $link = new LinkModel();
        if (request()->isPost()) {
          $validate = new LinkValidate();
          if(!$validate->scene('edit')->check($data)){
              $this -> error($validate->getError());
          }
          $data = input('post.');
          if ($link -> save($data,['id' => $data['id']])) {
            $this -> success('修改链接成功！',url('lst'));
          }else {
            $this -> error('修改链接失败！');
          }
        }
        $res = $link -> where('id',$id) -> find();
        $this -> assign('link',$res);
        return view();
      }
  }
