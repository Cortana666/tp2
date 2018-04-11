<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Article extends Model
  {
    protected static function init()
    {
        Article::event('before_insert', function ($data) {
            dump($data);die;
        });
    }

    public function addArticle($data) {
      return $this -> save($data);
    }
  }
