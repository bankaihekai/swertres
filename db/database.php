<?php
   $table = 'users';

    function connect(){
        global $conn;
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'swertres') or die("Connection Error");
    }

    function disconnect() {
        global $conn;
        mysqli_close($conn);
    }

    function getalluser(){
        global $conn, $table;
        connect();
        $query = mysqli_query($conn, "SELECT * FROM `$table`");
        $getrecord = mysqli_fetch_all($query);
        disconnect();
        return $getrecord;
    }

    function getrecord($username, $password){
        global $conn, $table;
        $sql = "SELECT * FROM `$table` WHERE `uname`='$username' and `pword`='$password'";
        connect();
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($query);
        disconnect();
        if(count($rows) > 0)
            return $rows[0];
        else
            return false;
    }
?>
