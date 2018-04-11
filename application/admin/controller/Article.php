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
      if (request() -> isPost()) {
        $data = input('post.');
        $data['time'] = 20180411;
        $article = new ArticleModel();
        if ($_FILES['thumb']['tmp_name']) {
          $file = request()->file('thumb');
          $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
          if($info){
            $url = 'public' . DS . 'uploads'.'/'.$info->getSaveName();
            $data['thumb'] = $url;
          }
        }
        $res = $article -> addArticle($data);
        if ($res) {
          $this -> success('添加文章成功！',url('lst'));
        }else {
          $this -> error('添加文章失败！');
        }
      }
      $cate = new Cate();
      $data = $cate -> cateTree();
      $this -> assign('cateres',$data);
      return view();
    }
  }
