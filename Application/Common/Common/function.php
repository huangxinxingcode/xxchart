<?php

//检查用户是否登录
function checkLogin(){
    if (empty($_SESSION['uid'])) {
        return false;
    }
    return  true;
}