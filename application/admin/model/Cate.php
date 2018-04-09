<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Cate extends Model
  {
    public function catetree() {
      $data = $this -> select();
      return $this -> sort($data);
    }

    public function sort($data,$pid=0,$level=0) {
      static $arr = array();
      foreach ($data as $key => $value) {
        if ($value['pid'] == $pid) {
          $value['level'] = $level;
          $arr[] = $value;
          $this -> sort($data,$value['id'],$level+1);
        }
      }
      return $arr;
    }
  }
