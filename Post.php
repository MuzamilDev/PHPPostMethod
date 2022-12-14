<?php

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$phone=      $_POST['phone'];
$email=       $_POST['email'];
$pass =      $_POST['pass'];


$Con = new mysqli('localhost','root','','dbName');

$sql = "INSERT INTO name (firstname,lastname,phone,email,pass) VALUES('$firstname','$lastname','$phone','$email','$pass')";

if($Con->query($sql) == TRUE)
{
    echo " Congratulations data inserted";

}
else{
    echo"error".$aql."br".$Con->error;
}

?>
