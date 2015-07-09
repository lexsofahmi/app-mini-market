<?php
session_start(); // harus ada di bagian paling atas kode

mysqli_connect('127.0.0.1', 'root', 'root', 'mini_marketdb');

$user = strip_tags(trim($_POST['username'])); #echo $user;
$pass = md5(strip_tags(trim($_POST['password']))); #echo $pass;
if($user!='' and $pass!='') {
    $q = mysqli_query(mysqli_connect('127.0.0.1', 'root', 'root', 'mini_marketdb'), "SELECT username, password
                 FROM USER WHERE username = '".$user."'");
    //$dpass = @mysqli_result($q,0,1);
    //$s_id  = @mysqli_result($q,0,0);
    //$level = @mysql_result($q,0,2);
    $no_rows = mysqli_num_rows($q);

    if($no_rows <= 1) {
        //unset($_POST); // hapus post form

// mengisi session
//        $_SESSION['s_id']   = $s_id;
        //$_SESSION['s_level']= $level;
        $_SESSION['s_user'] = $user;
        $_SESSION['s_pass'] = $dpass;

        header("location:./");
    }
    else {
        $konfirmasi = 'User ID atau Password Anda Salah';
        header("location:login.php?konfirmasi=".$konfirmasi);
    }
}
else {
    $konfirmasi = 'User ID atau Password Tidak Boleh Kosong';
    header("location:login.php?konfirmasi=".$konfirmasi);
}