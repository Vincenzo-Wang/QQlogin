<?php
require_once 'function.php';
require_once 'Connect2.1/qqConnectAPI.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<?php if(!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['qq_openid'])) { ?>
    <a href="qqlogin.php" >登录qq</a>
<?php } else { ?>
    <a href="qqlogout.php">退出QQ</a>
<?php  

    $qc = new QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
    $userinfo = $qc->get_user_info();
   
    debug($userinfo);



    } 
?>
</body>
</html>