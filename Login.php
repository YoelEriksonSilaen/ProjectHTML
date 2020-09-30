<?php
$conn = mysqli_connect("localhost","root","","test");

if(isset($_POST["Submit"])){
    $username =$_POST["username"];
    $password =$_POST["password"];

    $sql = mysqli_query($conn,"SELECT * FROM register where username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($sql);
    echo $cek;
    

}else
$error = "Username of Password is Invalid";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="logo2">
        <img src="img/logo.png" alt="" width="140px" height="110px">
    </div>

    
    <div id="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="Regist1.html">Registrasi</a></li>
        <li><a href="http://localhost/Yels/Login.php">Login</a></li>
        <li><a href="http://localhost/Yels/Feedback.php">Feedback</a></li>
        <li><a href="Rating.html">Rating</a></li>
        <li><a href="Forum.html">Forum</a></li>
    </div> 


    <div id="login-data">
    <form action="" method="POST">
        <fieldset>
        <legend>Login</legend>
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" placeholder="Input Username" id="myusername"/>
            <span></span>
        </p>
        <p>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="Input Password" id="mypassword"/>
            <span></span>
        </p>
        
            <button type="submit" name="Submit" value="Login" onclick="location.href='index.html'">Login</button>
        
        </fieldset>
    </form>

</div>
<div id="footer">
    Yole's Scholarship &copy; 2020
</div>
</body>
</html>