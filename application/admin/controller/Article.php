<?php
  namespace app\admin\controller;
  use think\Session;
  use app\admin\controller\Common;
  use app\admin\model\Cate;
  use app\admin\model\Article as ArticleModel;

  class Article extends Common
  {
    public function lst() {
      $article = new ArticleModel();
      $res = $article -> view('cate','catename')
                  ->view('article','id,title,author,thumb','cate.id=article.cateid')
                  ->paginate(1);
      $this -> assign('article',$res);
      return view();
    }

    public function add() {
      if (request() -> isPost()) {
        $data = input('post.');
        $article = new ArticleModel();
        if ($article -> save($data)) {
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

    public function edit($id)
    {
      $article = new ArticleModel;
      $res = $article -> where('id',$id) -> find();
      if (request()->isPost()) {
        $data = input('post.');
        if ($article -> save($data,['id' => $data['id']])) {
          $this -> success('修改文章成功！',url('lst'));
        }else {
          $this -> success('修改文章失败！');
        }

      }
      $cate = new Cate();
      $data = $cate -> cateTree();
      $this -> assign(array(
        'cateres' => $data,
        'articleres' => $res,
      ));
      return view();
    }
  }
