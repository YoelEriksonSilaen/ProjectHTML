<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost","root","","test");

if(!$conn) {
    echo 'Not connected to server!';
}

if(!mysqli_select_db($conn,'test')) {
    echo 'Database not selected!';
}


$Username = $_POST['username'];
$Email = $_POST['email'];
$Feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (username,email,feedback) 
VALUES ('$Username','$Email','$Feedback')";


if(!mysqli_query($conn,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="logo">
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

    <div id="form">
        <p id="feedback_button">Feedback</p>
      <form method="post" action="">
          <input type="text" id="uname" placeholder="Username" name="username">
          <br>
          <input type="text" id="email1" placeholder="Email" name="email">
          <br>
          <textarea id="feedback" placeholder="Feedback" name="feedback"></textarea>
          <br>
          <input type="submit" id="submit_feedback" values="Submit" name="submit">
          <br>
          <br>
          <a id="allData" href="http://localhost/Yels/InputanFeedback.php">Klik Disini untuk melihat Data feedback</a>
        </form>
      </div>
      
      <div id="footer">
        Yole's Scholarship &copy; 2020
    </div>
</body>
</html>