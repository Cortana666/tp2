<?php
namespace app\index\controller;

class Article extends Common
{
    public function index($artid)
    {
      $res = db('article') -> where('id',$artid) -> find();
      $cateres = db('cate') -> where('id',$res['cateid']) -> find();
      $this -> assign(array(
        'cateres' => $cateres,
        'artres' => $res,
      ));
      return view('article');
    }
}
