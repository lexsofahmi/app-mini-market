<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//include 'DatabaseUtil.php';

class User {
    //private $session;
    public $sessionUsername;
    //private $sessionPass;

    function getConn() {
        $conn = mysqli_connect('127.0.0.1', 'root', 'root', 'mini_marketdb');
        //$db = mysql_select_db("mini_marketdb");
        return $conn;
    }

    function setSession($username, $password) {
        //$dbsu = new DatabaseUtil('127.0.0.1', 'root', 'root', 'mini_marketdb');

        $password = md5($password);
        $result = mysqli_query($this->getConn(), "SELECT * FROM USER WHERE username='$username' AND password='$password'") ;
        //$user_data = mysqli_fetch_array($result);
        $no_rows = mysqli_num_rows($result);

        if ($no_rows <= 1) {
            //$_SESSION['login'] = TRUE;
            $this->sessionUsername = $_SESSION[$username];
            //$this->sessionPass = $_SESSION[$password];

            header("location:../../");
        }
        else echo "Gagal";

    }

    function setSession2($session) {
      $this->sessionUsername = $_SESSION[$session];
    }

    function getSession() {
        //return $_SESSION['login'];

        return $this->sessionUsername;
    }

    function setLogout() {
        session_start();
        $_SESSION['s_user'] = '';
        $_SESSION['s_pass'] = '';

        session_destroy();
        header("location:index.php");

        //header("location:index.php");
    }
}

//$user = new User();
//$user->setSession('lexso', 'jacksonkingv', $dbsu);

