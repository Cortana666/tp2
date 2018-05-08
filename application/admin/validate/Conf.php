<?php
  namespace app\admin\validate;

  use think\Validate;

  class Conf extends Validate
  {
    protected $rule =   [
      'title'  => 'unique:link|require|max:25',
      'url'   => 'unique:link|url|require',
    ];

    protected $message  =   [
        'title.unique' => '链接标题重复',
        'title.require' => '链接标题必须填写',
        'title.max' => '链接标题最多不能超过25个字符',
        'url.require' => '链接地址必须填写',
        'url.unique'     => '链接地址不能重复',
        'url.url'   => '链接地址必须符合规范',
    ];

    protected $scene = [
        'add'  =>  ['title','url'],
        'edit'  =>  ['title','url'],
    ];
  }


 ?>
