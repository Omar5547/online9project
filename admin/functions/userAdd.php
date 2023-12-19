<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $priv=$_POST['priv'];
 $gender=$_POST['gender'];
 include 'connect.php';
 $insertUser ="INSERT INTO users (username , password , email , address , phone , priv, gender) VALUES ( '$username' , md5 ('$password'), '$email' , '$address' , '$phone' , '$priv' , '$gender' )";
 $query =$conn -> query($insertUser);
 if($query){
    header("location: ../users.php");
 }else{
    echo $conn -> error;
 }
 
?>