<?php
  namespace app\admin\controller;
  use think\Controller;
  use think\Session;

  class Common extends Controller
  {
      public function _initialize() {
        if (!Session::has('name')) {
          $this -> error('请登录！',url('login/index'));
        }
      }
  }
