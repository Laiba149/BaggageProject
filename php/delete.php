<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','php');
$query = "DELETE FROM user WHERE id=$id ";
mysqli_query($conn,$query);
?>