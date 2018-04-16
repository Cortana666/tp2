<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Article extends Model
  {
    protected static function init()
    {
        Article::event('before_insert', function ($article) {
          if ($_FILES['thumb']['tmp_name']) {
            $file = request()->file('thumb');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
              $url = 'public' . DS . 'uploads'.'/'.$info->getSaveName();
              $article['thumb'] = $url;
            }
          }
        });

        Article::event('before_update', function ($article) {
          if ($_FILES['thumb']['tmp_name']) {
            $file = request()->file('thumb');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
              $url = 'public' . DS . 'uploads'.'/'.$info->getSaveName();
              $article['thumb'] = $url;
            }
            $res = Article::where('id',$article['id']) ->  find();
            $url = ROOT_PATH.$res['thumb'];
            if (file_exists($url)) {
              @unlink($url);
            }
          }
        });

        Article::event('before_delete', function ($article) {
            $res = Article::where('id',$article['id']) ->  find();
            $url = ROOT_PATH.$res['thumb'];
            if (file_exists($url)) {
              @unlink($url);
            }
        });
    }

    // public function del($cateid) {
    //   return Article::where('cateid','=',$cateid)->delete();
    // }
  }
