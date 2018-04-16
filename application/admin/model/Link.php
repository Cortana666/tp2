<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Link extends Model
  {
    public function linkLst($data) {
      $arr = array();
      $i = 0;
      foreach ($data as $key => $value) {
        $arr[$i]['id'] = $key;
        $arr[$i]['sort'] = $value;
        $i++;
      }
      $res = $this -> saveAll($arr);
      return $res;
    }
  }
