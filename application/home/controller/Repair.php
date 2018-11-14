<?php


namespace app\home\controller;


use think\Validate;

class Repair extends Home
{

    public function online(){
        return $this->fetch();
    }

    public function add(){

        $Channel = model('repair');
        $post_data=\think\Request::instance()->post();
        $Channel->create($post_data);
        $this->success('添加成功', url('index'));
    }

}