<?php
 require  'connect.php';
 $id =$_POST['id'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $priv=$_POST['priv'];
 $address=$_POST['address'];
 if(!empty($password)){
    $pass = md5($password);
    $updatePass ="UPDATE users set password ='$pass' WHERE id ='$id' ";
    $conn -> query($updatePass);
 }


 $updateUser = "UPDATE users set username = '$username' , phone = '$phone' , email = '$email' , gender = '$gender' , priv = '$priv' , address = '$address' WHERE id = '$id'";
 $query = $conn -> query($updateUser);
 if($query){
     header("location: ../users.php");
 }else{
    echo $conn -> error;
 }
 
?>