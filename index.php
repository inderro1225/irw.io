<?php
session_start();
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
<title>User Login</title>
</head>
<body >

<?php
if($_SESSION["name"]) {
?>
<?php if($_SESSION["name"]=="Mohit"){?>
<!---heading inder--->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
    <h1 style="padding-left:20px">WELCOME TO INDER RO WATER<span class="badge badge-secondary"></span></h1></ol></nav></li>

<!---nav bar starts-->
    <ul class="nav justify-content-center" style="background-color:#E6E6FA;height:65px;font-size:25px ;padding-left:10px">
  <li class="nav-item">
    <a class="nav-link active" href="add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="update.php">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:red" href="logout.php" >Logout</a>
  </li>
</ul>
<!--button groupd---->
<BR><a href="add.php"><button type="button" class="btn btn-primary btn-lg btn-block">ADD NEW RECORD</button></a><br>
<a href="update.php"><button type="button" class="btn btn-secondary btn-lg btn-block">UPDATE A RECORD</button></a><br>
<a href="delete.php"><button type="button" class="btn btn-primary btn-lg btn-block">DELETE A RECORD</button></a><br>
<a href="alldetail.php"><button type="button" class="btn btn-secondary btn-lg btn-block">SHOW ALL DETAIL</button></a><br>
<a href="sall.php"><button type="button" class="btn btn-primary btn-lg btn-block">SHOW DETAIL BY ID</button></a><br>
<a href="logout.php"><button type="button" class="btn btn-secondary btn-lg btn-block">LET ME OUT</button></a><br>

<!----adm & user--->
<?php
}
 else{ ?>
 <!------client side--->
 
<!---heading inder--->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
    <h1 style="padding-left:20px">WELCOME TO INDER RO WATER<span class="badge badge-secondary"></span></h1></ol></nav></li>

<!---nav bar starts-->
    <ul class="nav justify-content-center" style="background-color:#E6E6FA;height:65px;font-size:25px ;padding-left:10px">
  <li class="nav-item">
    <a class="nav-link active" href="add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="update.php">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:red" href="logout.php" >Logout</a>
  </li>
</ul>
<!--button groupd---->
<BR><a href="add.php"><button type="button" class="btn btn-primary btn-lg btn-block">ADD NEW RECORD</button></a><br>
<a href="update.php"><button type="button" class="btn btn-secondary btn-lg btn-block">UPDATE A RECORD</button></a><br>
<a href="logout.php"><button type="button" class="btn btn-secondary btn-lg btn-block">LET ME OUT</button></a><br>

<?php }
?>
<!--session variable closing-->
<?php
}else echo "<a href='login.php'><h1>Please login first</h1></a>";
?>
</body>
</html>