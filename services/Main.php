<?php

/* Class DatabaseUtil */
include 'DatabaseUtil.php';

/* Class User */
include 'User.php';

// ------------------------------------------------------------------------------------------------->
// Start Class DatabaseUtil
$dbsu = new DatabaseUtil(); /* instantiate DatabaseUtil */

// End Class DatabaseUtil
// ------------------------------------------------------------------------------------------------->

// ------------------------------------------------------------------------------------------------->
// Start Class User
$user = new User(); /* instantiate User */

if ($_GET) {
    switch ($_GET['act']) {
        case 'logout' :
            $user->setLogout();
            break;
    }
} elseif ($_POST) {
    switch ($_POST['act']) {
        case 'login' :
            $data['usr'] = $_POST['usr'];
            $data['pwd'] = $_POST['pwd'];

            $user->setLogin($data['usr'], $data['pwd']);
            break;
    }

    if ($_POST['aksi'] == 'save') {
        $data['usr'] = $_POST['usr'];
        $data['pwd'] = $_POST['pwd'];

        $dbsu->save($data['usr'], $data['pwd']);

        echo json_encode($data);

    } elseif ($_POST['aksi'] == 'delete') {
        $dbsu->delete($_POST['id']);
    }
}

// End User
// ------------------------------------------------------------------------------------------------->