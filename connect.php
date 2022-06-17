<?php  

$con=new mysqli('127.0.0.1:3307','root','','crudoperation');

if($con){
    echo "Connection successfull";
}else{
    die(mysqli_error($con));
}


?>

