<?php

$id=$_GET['id'];
require_once 'connect.php';
$del = "DELETE FROM users WHERE id =$id ";


if($conn-> query($del)){
    header("location: .. / users.php");
}





?>