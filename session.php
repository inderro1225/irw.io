<?php   
$dbc=mysqli_connect("locahost","root","","inderro")or die("can't connect");
session_start(); 
     
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($dbc,$query);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];


/*if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("location:login.php");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
*/
?>