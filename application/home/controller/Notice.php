<?php

namespace app\home\controller;


use think\Db;

class Notice extends Home
{
    public function notice(){
        $list=Db::name('Document')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function list(){

        $list=Db::name('Document')->find((int)input('id'));
        $content=Db::table('twothink_document_article')->find((int)input('id'));

        $this->assign('list', $list);
        $this->assign('content', $content);
        $list['uid']|get_username;
        return $this->fetch();
    }

}