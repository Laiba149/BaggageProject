<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','php');
$query = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <form action="update.php?id=<?php echo $row['id'];?>"method="post">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $row['Name']; ?>">
        <label for="">Class</label>
        <input type="text" name="class" value="<?php echo $row['Class']; ?>">
        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php echo $row['Phone']; ?>">
        <button>save</button>
    </form>
    <?php
    }
    ?>
    
</body>
</html>