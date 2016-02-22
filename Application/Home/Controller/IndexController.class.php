<?php
namespace Home\Controller;

use Home\Model\UserModel;
use Think\Controller;

class IndexController extends Controller {
    public function index(){

        $box = new UserModel('user',null);

//        $box->trueTableName = 'box';
        //字段名.very god
        $e['yes'] = '';
        $e['morege'] = 'f';
        $values = $box->where($e)->select();



        $User = M("user",null); // 实例化User对象
// 查找status值为1name值为think的用户数据
        $data = $User->where($e)->find();
        dump($data);
//
//        var_dump($box);
//        $more = $box->find();
//        var_dump($more);

        var_dump($values);
//        $this->assign('box',123);
        $this->display();
    }
}