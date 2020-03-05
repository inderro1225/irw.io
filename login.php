<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','inderro') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM admin WHERE username='" . $_POST["user_name"] . "' and passcode = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["name"])) {
header("Location:index.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>body {
 background-color:#F8F8FF;
 font-family:Georgia, serif;
}</style>
</head>

<body>
<form name="frmUser" method="post" action="" style="padding-top: 10px;" >

<div class="message"><?php if($message!="") { echo $message; } ?></div>
    <!--<p style="font-size:25px">WELCOME TO INDER RO </p>-->
    
<p style="font-size:40px">Enter Login Details</p>

 <label style="font-size:25px">Username:</label>
 <input type="text" name="user_name" size=100px style="height:40px;font-size:20px" placeholder="Enter Your Username!!!"><br><br>

 <label style="font-size:25px">Password:</label>
<input type="password" name="password" placeholder="Enter Your Password!!!" size=101px style="height:40px;font-size:20px" ><br><br>
<input size=100px style="height:50px;width:1150px;font-size:20px;background-color:#3390FF;color:white" type="submit" name="submit" value="Submit">
</form>
</body>
</html>