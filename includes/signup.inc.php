<?php
session_start();  
include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if (empty($first) || empty($last) || empty($uid) || empty($pwd) ) {
   echo "* One or more required fields";
}
else{
$sql = "INSERT INTO user (first, last, uid, pwd) 
VALUES ('$first', '$last', '$uid', '$pwd')"; 
$result = $conn->query($sql);

header("Location: ../index.php");
}

