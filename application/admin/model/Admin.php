<?php
  namespace app\admin\model;
  use think\Model;

  class Admin extends Model
  {
    function addadmin($data){
      if (empty($data) || !is_array($data)) {
        return false;
      }
      if ($data['password']) {
        $data['password'] = md5($data['password']);
      }
      if ($this -> save($data)) {
        return true;
      }else {
        return false;
      }
    }
  }
