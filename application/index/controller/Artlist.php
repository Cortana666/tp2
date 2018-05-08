<?php
namespace app\index\controller;
use app\index\model\Cate;

class Artlist extends Common
{
    public function index($cateid)
    {
      $cate = new Cate();
      $son = $cate -> getSonid($cateid);
      $res = $cate::name('article') -> where('cateid','in',$son) -> order('time desc') -> paginate(1);
      $this -> assign("article",$res);
      return view('artlist');
    }
}
