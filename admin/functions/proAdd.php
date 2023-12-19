<?php
require_once 'connect.php';
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$category = $_POST['category'];


$imageName = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];

if($_FILES['img']['error']==0){

    $extensions = ['jpg' , 'jpeg' , 'gif' , 'png'];
    // $newArr = explode('.', $imageName);
    // print_r(array_pop($newArr));
    $ext =pathinfo($imageName, PATHINFO_EXTENSION);
    if(in_array($ext,$extensions)){

        if($_FILES['img']['size']<2000000){

            $newName = md5(uniqid()) . "." . $ext;
            move_uploaded_file($temp, '../images/'.$newName);
        }else{
            echo "file size is too big";
        }

    }else{
        echo"extension doesn't allowed";
    }
}else{
    echo "you must upload an image";
}



$inser ="INSERT INTO products(name , price , sale , cat_id , img ) VALUES ('$name' , '$price' , '$sale','$category', '$newName' ) ";

$query = $conn -> query($inser);

if($query){
    header('location: ../products.php');
}else{
        echo $conn -> error;
}


?>