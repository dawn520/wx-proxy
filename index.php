<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2018/12/5
 * Time: 10:14
 */
foreach ($_GET as $key => $item) {
    if ($key != 'to') {
        $params .= '&' . $key . '=' . $item;
    }
}
if (empty($_GET['to'])) {
    header('Location: https://www.17duu.com');
} else {
    if (empty($params)) {
        $url = $_GET['to'];
    } else {
        $redirectUri = urldecode($_GET['to']);
        $redirectUriArray = explode('?', $redirectUri);
        $url = $redirectUriArray[0] . '?' . $params . '&' . $redirectUriArray[1];
    }
    header('Location:' . $url);
}
