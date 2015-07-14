<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class User {
    public $sessionUsername;

    function getConn() {
        $conn = mysqli_connect('127.0.0.1', 'root', 'root', 'mini_marketdb');
        return $conn;
    }

    function setLogin($username, $password) {
        session_start();
        $user = strip_tags(trim($username));
        $pass = md5(strip_tags(trim($password)));

        if ($user != '' AND $pass != '') {
            $q = mysqli_query($this->getConn(), "SELECT username, password
                 FROM user WHERE username = '" . $user . "' AND password = '" . $pass . "'");

            $no_rows = mysqli_num_rows($q);

            if ($no_rows == 1) {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
            } else {
                echo "<script>alert('Periksa Username dan Password Anda')</script>";

            }
            //header("location:./");

        } else {
            $konfirmasi = 'User ID atau Password Tidak Boleh Kosong';
            header("location:login.php?konfirmasi=" . $konfirmasi);
        }

    }

    function setLogout() {
        session_start();

        session_destroy();
    }
}