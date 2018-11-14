<?php

namespace app\admin\validate;
use think\Validate;

class Notice extends Validate
{
    protected $rule = [
        ['title', 'require', '标题不能为空'],
        ['introduce', 'require', '简介不能为空'],
        ['flow', 'require', '浏览不能为空'],
        ['content', 'require', '内容不能为空'],
   //     ['img', 'require', '图片不能为空'],
    ];
}