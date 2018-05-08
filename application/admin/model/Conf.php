<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Conf extends Model
  {
    public function confLst($data) {
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

    public function editConf($data)
    {
      $arr1 = array();
      $arr2 = array();
      $database = $this -> field('enname') -> select();
      foreach ($database as $k1 => $v1) {
        $arr1[] = $v1['enname'];
      }
      foreach ($data as $k2 => $v2) {
        $arr2[] = $k2;
      }
      $result = array_diff($arr1,$arr2);
      if (!empty($result)) {
        foreach ($result as $k3 => $v3) {
          $data[$v3] = '';
        }
      }
      foreach ($data as $key => $value) {
        $res = $this -> where('enname',$key) -> update(['value' => $value]);
        if ($res === false) {
          return false;
        }
      }
      return true;
    }
  }
