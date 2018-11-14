<?php

namespace app\admin\controller;


use think\Db;

class Repair extends Admin
{

    public function index(){
        $list=Db::name('Repair')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add(){

        if(request()->isPost()){
            $Channel = model('repair');
            $post_data=\think\Request::instance()->post();
            //自动验证
//            var_dump($post_data);
//            die;
            $validate = validate('repair');
//            var_dump($validate);
//            die;
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }

            $data = $Channel->create($post_data);
            if($data){
                $this->success('新增成功', url('index'));
                //记录行为
                action_log('update_channel', 'channel', $data->id, UID);
            } else {
                $this->error($Channel->getError());
            }
        }

        return $this->fetch();
    }

    public function edit($id=0){

        if($this->request->isPost()){
            $postdata = \think\Request::instance()->post();
            $Repair = \think\Db::name("repair");

            $validate = validate('repair');
//            var_dump($validate);
//            die;
            if(!$validate->check($postdata)){
                return $this->error($validate->getError());
            }

            $data = $Repair->update($postdata);
            if($data !== false){
                $this->success('编辑成功', url('index'));
            } else {
                $this->error('编辑失败');
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = \think\Db::name('Repair')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }
        }


        $this->assign('info',$info);
        return $this->fetch('add');
    }

    public function del(){
        $id = array_unique((array)input('id/a',0));

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
        if(\think\Db::name('repair')->where($map)->delete()){
            //记录行为
            action_log('update_channel', 'repair', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }
}