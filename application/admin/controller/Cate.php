<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\model\Article;
  use app\admin\validate\Cate as CateValidate;
  use app\admin\model\Cate as CateModel;

  class Cate extends Common
  {
      protected $beforeActionList = [
          'delson'  =>  ['only'=>'del'],
      ];

      public function lst()
      {
        $cate = new CateModel();
        if (request()->isPost()) {
          $data = input('post.');
          $cate -> cateLst($data);
        }
        $res = $cate -> cateTree();
        $this -> assign('cateres',$res);
        return view();
      }

      public function add(){
        $cate = new CateModel();
        if (request()->isPost()) {
          $data = input('post.');
          $validate = new CateValidate();
          if(!$validate->check($data)){
              $this -> error($validate->getError());
          }
          if ($cate -> save($data)) {
            $this -> success('添加栏目成功！',url('lst'));
          }else {
            $this -> error('添加栏目失败！');
          }
        }
        $res = $cate -> cateTree();
        $this -> assign('cateres',$res);
        return view();
      }

      public function del($id) {
        $cate = new CateModel();
        $res = $cate -> where('id','=',$id) -> delete();
        $artres = Article::destroy(['cateid' => $id]);
        if (false !== $res&&$artres !== false) {
          $this -> success('删除栏目成功！',url('lst'));
        }else {
          $this -> error('删除栏目失败！',url('lst'));
        }
      }

      public function delson() {
        $id = input('id');
        $cate = new CateModel();
        $sonid = $cate -> getSonId($id);
        if ($sonid) {
          foreach ($sonid as $key => $value) {
            Article::destroy(['cateid' => $value]);
          }
          db('cate') -> delete($sonid);
        }
      }

      public function edit($id) {
        $cate = new CateModel();
        if (request()->isPost()) {
          $validate = new CateValidate();
          $data = input('post.');
          if(!$validate->check($data)){
              $this -> error($validate->getError());
          }
          if ($cate -> save($data,['id' => $data['id']])) {
            $this -> success('修改栏目成功！',url('lst'));
          }else {
            $this -> error('修改栏目失败！');
          }
        }
        $res = $cate -> cateTree();
        $this -> assign('cateres',$res);
        $cateres = $cate -> where('id',$id) -> find();
        $this -> assign('data',$cateres);
        return view();
      }
  }
