<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\model\Cate;
  use app\admin\model\Article as ArticleModel;

  class Article extends Common
  {
    public function lst() {
      return view();
    }

    public function add() {
      $cate = new Cate();
      $data = $cate -> cateTree();
      $this -> assign('cateres',$data);
      return view();
    }
  }
