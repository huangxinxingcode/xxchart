<?php
namespace  Home\Controller;
use Think\Controller;
/*
 *用户控制器 
 **/
class UserController extends Controller {
    function _initialize(){
        $this->userService = A('userService', 'Service');
    }
    //用户登录首页
    public function index(){
        $this->display();
    } 
    
    //登录
    public function login(){
        //TODO
    }
    
    //注册
    public function register(){
       $this->display();
    }
    
    
    //检查是否登录
    public function checkLogin(){
        if (empty($_SESSION['uid'])) {
            return false;
        }
        return true;
    }
    
    //查询用户是否存在
    public function checkExistence()
    {
        $userName = I('userName');
        //用户名存在性校验
        $result = $this->userService->isUserNameExisted($userName);
        if(is_string($result) && 0 === strpos($result, Constant::ERROR_CODE_PREFIX))
        {
            $this->renderErrException($result);
        }
        else
        {
            $data['exist'] = $result;
            $this->renderOKData($data);
        }
        
    }
    
    public function sendIdentifyingCode(){
        //获取用户名
        $username = trim(I('username'));
        $username = str_replace('＠','@',$username);
        if (isPhone($username)) {
            
        }
        elseif (isEmail($username)) {
            
        }
    }
    
    
    
    
}