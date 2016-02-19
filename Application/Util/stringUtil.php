<?php
/**
 *
 * 判断手机号是否符合规范
 * @param $phone
 */
function isPhone($phone)
{
    $pattern = "/^1\d{10}$/";
    if (preg_match($pattern,$phone))
    {
        return true;
    }

    return false;
}