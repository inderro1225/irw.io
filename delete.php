<?php
session_start();
?>
<html>

<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
body {
 background-color:#F8F8FF;
 font-family:Georgia, serif;
 font-size:17;
}</style>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
<html>
<head></head>
<body>
<form method="post" action="">
<!----A and client compro-->
<?php if($_SESSION["name"]==="Mohit"){?>
    <div style="border:3px solid black">
<!---heading inder--->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
    <h1 style="padding-left:20px"><center><b>WELCOME TO INDER RO WATER</b></center><span class="badge badge-secondary"></span></h1></ol></nav></li>

<!---nav bar starts-->
<ul class="nav justify-content-center" style="background-color:#E6E6FA;height:65px;font-size:25px ;padding-left:10px">
<li class="nav-item">
    <a class="nav-link active" href="http://localhost/Inder/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="http://localhost/Inder/add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/Inder/update.php">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:red" href="http://localhost/Inder/logout.php" >Logout</a>
  </li>
</ul><br>

    <center><h1> <b>DELETE AN RECORD</b></h1>
  <label><b>ID</b></label><br>
    <input type= "text" style="width:300"  name="idd"><br>
    <label><b>DATE </b></label><br>
    <input type= "text" style="width:300" name="fd"><br><br>
    <button style="width:300" name="submit" value="submit" onclick="return mess();">Submit</button> <br><br>
<p><b>-------------------------------------------------------------------------------------------------------</b></p>
</center>
</form>
<script type="text/javascript">
function mess(){
    alert("Data deleted successfully!!!");
    return true;
}

</script>

<?php
//$fd=$td="";
if(isset($_POST['submit'])) {
$fd=$_POST['fd'];
$id=$_POST['idd'];


$dbc=mysqli_connect('localhost','root','','inderro') or die('Unable To connect');
$q="delete from  customer WHERE date='$fd' and id=$id";
$result=mysqli_query($dbc,$q);
if($result)
 {  
      header("location:http://localhost/Inder/delete.php");
      exit();
}
else
    echo "<script>alert('Data Not deleted')</script>";

}?>

<?php
} 
//comparision adm and emp
else
{header("location:http://localhost/Inder/login.php");}
?>
<?php
}else echo "<a href='http://localhost/Inder/login.php'><h1>Please login first</h1></a>";
?>

</body>
</html>