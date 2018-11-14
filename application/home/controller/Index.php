<?php
// +----------------------------------------------------------------------
// | TwoThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.twothink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace app\home\controller;
use app\home\model\Document;
use OT\DataDictionary;
use think\Config;
/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class Index extends Home{

	//系统首页
    public function index(){

        return $this->fetch();
    }

}
