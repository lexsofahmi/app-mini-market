<?php
//session_start();

include 'DatabaseUtil.php';

/* Class User */
include 'User.php';

/* End Class User */

/* Class DatabaseUtil */
$dbsu = new DatabaseUtil('127.0.0.1', 'root', 'root', 'mini_marketdb');
$user = new User();

if ($_GET['aksi']=='login') {
    $user->setLogin();
}

if ($_POST['aksi'] == 'save') {
    $data['usr'] = $_POST['usr'];
    $data['pwd'] = $_POST['pwd'];

    $dbsu->save($data['usr'], $data['pwd']);

    echo json_encode($data);

} elseif ($_POST['aksi'] == 'delete') {
    $dbsu->delete($_POST['id']);
}
/* End Class DatabaseUtil */