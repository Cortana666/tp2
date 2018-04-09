<?php
  namespace app\admin\model;
  use think\Model;
  use think\Session;

  class Admin extends Model
  {
    public function addAdmin($data) {
      if (empty($data) || !is_array($data)) {
        return false;
      }
      if ($this -> where('name',$data['name']) -> find()) {
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

    public function getAdmin() {
      return $this -> paginate(3);
    }

    public function editAdmin($id) {
      return $this -> find($id);
    }

    public function saveAdmin($data,$adminres) {
      if (!$data['password']) {
        $data['password'] = $adminres['password'];
      }else {
        $data['password'] = md5($data['password']);
      }
      return $this -> save($data,['id'=>$data['id']]);
    }

    public function delAdmin($id) {
      if ($this -> where('id','=',$id)->delete()) {
        return true;
      }else {
        return false;
      }
    }

    public function loginAdmin($data) {
      if (empty($data['name'])) {
        return 3;
      }
      $res = $this -> where('name',$data['name']) -> find();
      if (empty($res)) {
        return 0;
      }else {
        if (md5($data['password']) == $res['password']) {
          Session::set('id',$res['id']);
          Session::set('name',$res['name']);
          return 1;
        }else {
          return 2;
        }
      }
    }
  }
