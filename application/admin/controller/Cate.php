<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\model\Cate as CateModel;

  class Cate extends Common
  {
      protected $beforeActionList = [
          'delson'  =>  ['only'=>'del'],
      ];

      public function lst()
      {
        $cate = new CateModel();
        $res = $cate -> cateTree();
        $this -> assign('cateres',$res);
        return view();
      }

      public function add(){
        $cate = new CateModel();
        if (request()->isPost()) {
          $data = input('post.');
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
        if ($cate -> where('id','=',$id) -> delete()) {
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
          db('cate') -> delete($sonid);
        }
      }
  }
