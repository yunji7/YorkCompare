<?php
    /**
     *
     * User: Administrator
     * Date: 2016/2/22 0022
     * Time: 15:01
     */


    namespace Home\Model;
    use Think\Model;
    class UserModel extends Model {
//        protected $tablePrefix = '';

        protected $_map = array(
            'name' =>'morego', // 把表单中name映射到数据表的username字段
//            'mail'  =>'email', // 把表单中的mail映射到数据表的email字段
        );
    }