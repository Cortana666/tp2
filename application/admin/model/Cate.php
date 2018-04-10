<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Cate extends Model
  {
    public function cateTree() {
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

    public function getSonid($id) {
      $data = $this -> select();
      return $this -> _getSonId($data,$id);
    }
    public function _getSonId($data,$id) {
      static $sonarr = array();
      foreach ($data as $key => $value) {
        if ($value['pid'] == $id) {
          $sonarr[] = $value['id'];
          $this -> _getSonId($data,$value['id']);
        }
      }
      return $sonarr;
    }
  }
