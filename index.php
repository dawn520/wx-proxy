<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2018/12/5
 * Time: 10:14
 */
foreach ($_GET as $key => $item) {
    if($key != 'redirect_uri'){
        $params .= '&'.$key . '=' . $item;
    }
}
if (empty($_GET['redirect_uri'])) {
    header('Location: https://www.17duu.com');
}else{
    if(empty($params)){
        $url = $_GET['redirect_uri'];
    }else{
        $redirectUri = urldecode($_GET['redirect_uri']);
        $redirectUriArray = explode('?',$redirectUri);
        $url = $redirectUriArray[0].'?'.$params.'&'.$redirectUriArray[1];
    }
    header('Location:'.$url);
}
