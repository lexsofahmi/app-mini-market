<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class DatabaseUtil {
    /* Static */
    //private static $dbHost;
    //private static $dbUser;
    //private static $dbPass;
    //private static $dbName;
    //
    //public static function setConnectServer($dbHost, $dbUser, $dbPass) {
    //    //$this->dbHost = $dbHost;
    //    //$this->dbUser = $dbUser;
    //    //$this->dbPass = $dbPass;
    //
    //    self::$dbHost = $dbHost;
    //    self::$dbUser = $dbUser;
    //    self::$dbPass = $dbPass;
    //}
    //
    //public static function getConnectServer() {
    //    $conn = mysql_connect(self::$dbHost, self::$dbUser, self::$dbPass);
    //    if (!$conn) {
    //        echo "gak connect";
    //    }
    //}

    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    private $statusConnect;

    private $conn;

    public function __construct($dbHost, $dbUser, $dbPass, $dbName) {
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;

        $this->conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die ("Error Connection " . mysqli_error($this->conn));
    }

    public function isDBServer() {
        //echo $this->statusConnect;
        echo "<script>alert('$this->statusConnect')</script>";
    }

    public function save($nama, $password) {
        mysqli_query($this->conn, "INSERT INTO USER (nama, password) VALUES ('$nama', '$password')") or die("Error save " . mysqli_error($this->conn));

        //if ($query) {
        //    echo json_encode()
        //    echo "Berhasil save ";
        //}
    }

    public function update($id, $nama, $password) {
        $query = mysqli_query($this->conn, "UPDATE USER SET nama='$nama', password='$password' WHERE id = '$id'");

        if ($query) echo "Berhasil update bro";
    }

    public function delete($id) {
        $query = mysqli_query($this->conn, "DELETE FROM USER WHERE id='$id'");

        if ($query) echo "Berhasil delete bro";
    }

    public function getConn() {
        return $this->conn;
    }

}

//$dbsu = new DatabaseUtil('127.0.0.1', 'root', 'root', 'mini_marketdb');
//
//if ($_POST['aksi'] == 'save') {
//    $data['usr'] = $_POST['usr'];
//    $data['pwd'] = $_POST['pwd'];
//
//    $dbsu->save($data['usr'], $data['pwd']);
//
//    echo json_encode($data);
//
//} elseif ($_POST['aksi'] == 'delete') {
//    $dbsu->delete($_POST['id']);
//}