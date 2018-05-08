<?php
  namespace app\admin\validate;

  use think\Validate;

  class Article extends Validate
  {
    protected $rule =   [
      'title'  => 'unique:article|require|max:25',
      'cateid'   => 'require',
      'content'   => 'require',
    ];

    protected $message  =   [
        'title.unique' => '文章标题不能重复',
        'title.require' => '文章标题必须填写',
        'title.max'     => '文章标题最多不能超过25个字符',
        'cateid.require'   => '文章栏目必须选择',
        'content.require'     => '文章内容不能为空',
    ];

    protected $scene = [
        'add'  =>  ['title','cateid','content'],
        'edit'  =>  ['title'],
    ];
  }


 ?>
