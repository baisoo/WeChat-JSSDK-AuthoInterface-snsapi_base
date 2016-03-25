<!--WeChat Autho(snsapi_base)
====================================================== -->
<?php

    session_start();

    $_SESSION['url'] = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
    if(!isset($_SESSION["openid"]))
    {
        include_once 'weChat/weChatAutho.php';
    }else
    {
        //echo 'openid:'.$_SESSION['openid'] . '<br />';
    }


?>
