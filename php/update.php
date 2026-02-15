<?php
$id = $_GET['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$phone = $_POST['phone'];
$conn = mysqli_connect('localhost','root','','php');
$query = "UPDATE user SET name='$name',class='$class',phone='$phone' WHERE id=$id ";
mysqli_query($conn,$query);
header('location:show.php');



?>
