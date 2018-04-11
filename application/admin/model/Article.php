<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Article extends Model
  {
    public function addArticle($data) {
      return $this -> save($data);
    }
  }
