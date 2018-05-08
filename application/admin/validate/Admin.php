<?php
  namespace app\admin\validate;

  use think\Validate;

  class Admin extends Validate
  {
    protected $rule =   [
      'name'  => 'unique:admin|require|max:25',
      'password'   => 'require|min:31',
    ];

    protected $message  =   [
        'name.unique' => '管理员名称不能重复',
        'name.require' => '管理员名称必须填写',
        'name.max'     => '管理员名称最多不能超过25个字符',
        'password.require'   => '管理员密码必须填写',
        'password.min'     => '管理员密码不符合规矩',
    ];

    protected $scene = [
        'add'  =>  ['name','password'],
        'edit'  =>  ['name'],
    ];
  }


 ?>
