<?php
/**
 * Created by PhpStorm.
 * User: Simou
 * Date: 27/02/2019
 * Time: 22:03
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$table = "counter";
$database = "wassimchag_users";
$query_insert = "INSERT INTO counts(timeStamp) VALUES (CURRENT_TIMESTAMP );";


if (!isset($_SESSION)) {
    session_start();
    $connection = mysqli_connect($servername, $username, $password, $database);
    if ($connection) {
        $send_query = mysqli_query($connection, $query_insert);
    } else {
        $logFile = "log.txt";
        $fw = fopen($logFile, 'w');
        fwrite($fw, "CONNECTION ERROR!!! at " . time() . ". \n");
    }
}

//$query_retrieve = "SELECT COUNT(timeStamp) as counts FROM counter ;";
//
//$send_query = mysqli_query($connection, $query_retrieve);
//
//$count = mysqli_num_rows($send_query);
//
//if ($count == NULL) {
//    mysqli_query($connection, "INSERT INTO users(session,time) VALUES('$time','$session') ");
//}