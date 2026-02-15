<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conn = mysqli_connect('localhost','root','','php');
$query = "SELECT * FROM user ";
$result = mysqli_query($conn,$query);


?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Class'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                       <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
        }
        ?>
    </tbody>
</table>




</body>
</html>