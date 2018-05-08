<?php
  namespace app\index\model;

  use think\Model;

  class Cate extends Model
  {
    public function getSonid($id) {
      $data = $this -> select();
      $sonarr = $this -> _getSonId($data,$id);
      $sonarr[] = $id;
      $son = implode(',',$sonarr);
      return $son;
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
