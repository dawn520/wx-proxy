<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2018/12/5
 * Time: 10:14
 */
foreach ($_GET as $key => $item) {
    $params .= '&'.$key . '=' . $item;
}
if (empty($_GET['redirect_uri'])) {
    header('Location: https://www.17duu.com');
}else{
    if(empty($params)){
        $url = $_GET['redirect_uri'];
    }else{
        $url = $_GET['redirect_uri'].'?'.$params;
    }
    header('Location:'.$url);
}
