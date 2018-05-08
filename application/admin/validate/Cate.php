<?php
  namespace app\admin\validate;

  use think\Validate;

  class Cate extends Validate
  {
    protected $rule =   [
      'catename'  => 'unique:cate|require|max:25',
      'type'   => 'require',
      'pid'   => 'require',
    ];

    protected $message  =   [
        'catename.unique' => '栏目名称不能重复',
        'catename.require' => '栏目名称必须填写',
        'catename.max'     => '栏目名称最多不能超过25个字符',
        'type.require'   => '栏目类型必须填写',
        'pid.require'     => '所属栏目必须填写',
    ];
  }


 ?>
