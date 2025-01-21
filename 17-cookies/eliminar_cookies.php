<?php 

if ($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}

header('Location_ver_cookies.php');

?>