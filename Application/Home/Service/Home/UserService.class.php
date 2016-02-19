<?php
require_once('Application/Util/stringUtil.php');
use Think\Model;
class UserService extends  Model{
    public function isUserNameExisted($userName)
    {
        //入参校验: 登录用户名
        if(isStringEmpty($userName))
        {
            return 'err07001';
        }
    
        //拼装请求URL
        $url = CHECK_USER_NAME_EXISTENCE.'&loginname='.$userName;
    
        //发送请求报文
        $respStr = call_api($url, 'GET');
    
        //响应报文解析
        $resp = json_decode($respStr, true);
        if(null == $respStr)
        {
            return 'err00004';
        }
         
        //获取错误码结点并校验
        if(null == $resp)
        {
            return 'err00005';
        }
        if(0 !==$resp['errcode'])
        {
            return $result = 'err'.$resp['errcode'];
        }
        	
        return $resp['exist'];
    }
    
}