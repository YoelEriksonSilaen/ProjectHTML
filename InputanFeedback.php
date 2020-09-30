<?php

$conn = mysqli_connect("localhost","root","","test");

$result = mysqli_query($conn, "SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Feedback</title>
</head>
<body>
    <h1>Data Feedback Member</h1>
    <table border="1" cellpading="10" cellsapcing="0" >

    <tr>
        
        <td>Username</td>
        <td>Email</td>
        <td>Feedback</td>
    </tr>
   
    <?php
    while($row = mysqli_fetch_assoc($result)):?>
    </tr>
    <td><?= $row["username"]?></td>
    <td><?= $row["email"]?></td>
    <td><?= $row["feedback"]?></td>
    <tr>
    <?php endwhile;?> 
    
    </table>
</body>
</html>