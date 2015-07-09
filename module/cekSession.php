<?php
include 'services/Main.php';
//session_start();
//include 'services/DatabaseUtil.php';

//$_SESSION['login']=$user->getSession();

//if ($_SESSION['login'] == FALSE) {
//    header("location:module/login/login.php");
//}

//if (empty($_SESSION['username'])) {
//$sessionUser = $user->getSession();

if ($_SESSION['s_user']=='' && $_SESSION['s_pass']=='') {
    header("location:login.php");
}