<?php
echo $name = $_POST["name"];
echo "<br>";
echo $class = $_POST["class"];
echo "<br>";
echo $phone = $_POST["phone"];

$conn =mysqli_connect('localhost','root','','php');
$query = "INSERT INTO user (name,class,phone) VALUES('$name','$class','$phone')";
mysqli_query($conn,$query);
?>