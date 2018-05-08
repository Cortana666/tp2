<?php

namespace app\index\controller;
use think\Controller;

class Common extends Controller
{
    public function _initialize()
    {
      $this -> getNavCates();
    }
    public function getNavCates(){
      $firstres = db('cate')->where('pid',0)->select();
      foreach ($firstres as $key => $value) {
        $secondres = db('cate')->where('pid',$value['id'])->select();
        if ($secondres) {
          $firstres[$key]['second'] = $secondres;
        }else {
          $firstres[$key]['second'] = '';
        }
      }
      $this -> assign('navcates',$firstres);
    }
}
