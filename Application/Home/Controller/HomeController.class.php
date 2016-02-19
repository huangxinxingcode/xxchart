<?php

namespace Home\Controller;
use Think\Controller;

/**
 * 前台公共控制器
 */
class HomeController extends Controller {

    /* 空操作，用于输出404页面 */
    public function _empty(){
        $this->redirect('Error/error');
    }
    //初始化操作
    function _initialize() {
       $user = A('User');
        if(false === $user->checkLogin()){
           $this->redirect('User/index');
       }
    }


}
