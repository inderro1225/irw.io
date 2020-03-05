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
 font-size:12;
}</style></head>

<body>

<?php
if($_SESSION["name"]) {
?>

<html>
<head>
<title>Update</title><style>
body {
 background-color:#F8F8FF;
 font-family:Georgia, serif;
 font-size:12;
}</style>
<body>
<form method="post" action="" style="padding-left:10px;">
<div style="border:3px solid black">
<!---heading inder--->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
    <h1 style="padding-left:20px"><center><b>WELCOME TO INDER RO WATER</b></center><span class="badge badge-secondary"></span></h1></ol></nav></li>

<!---nav bar starts-->
<ul class="nav justify-content-center" style="background-color:#E6E6FA;height:65px;font-size:25px ;padding-left:10px">
  
<li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="update.php">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:red" href="logout.php" >Logout</a>
  </li>
</ul>

<center><h1> <b>UPDATE AN RECORD</b></h1>
  <label><b>ID</b></label><br>
    <input type= "text" style="width:300" placeholder="Enter id" name="id"><br>
    <label><b>NAME</b></label><br>
    <input type= "text" style="width:300" name="name" placeholder="Enter name"><br>
    <label><b>CIN</b></label><br>
    <input type= "text" style="width:300" name="cin" placeholder="Enter Camper In"><br>
    <label><b>COUT</b></label><br>
    <input type= "text" style="width:300" name="cout" placeholder="Enter Camper Out"><br>
    <label><b>CLEFT</b></label><br>
    <input type= "text" style="width:300" name="cleft" placeholder="Enter Camper Left"><br>
    <label><b>BIN</b></label><br>
    <input type= "text" style="width:300" name="bin" placeholder="Enter Bottle In" value="0"><br>
    <label><b>BOUT</b></label><br>
    <input type= "text" style="width:300" name="bout" placeholder="Enter bottle out" value="0"><br>
    <label><b>BLEFT</b></label><br>
    <input type= "text" style="width:300" name="bleft" placeholder="Enter bottle left" value="0"><br>
    <label><b>CASH GIVEN</b></label><br>
    <input type= "text" style="width:300" name="cgiven" placeholder="Enter Cash Given" ><br>
    <label><b>ENAME</b></label><br>
    <input type= "text" style="width:300" name="ename" value=<?php echo $_SESSION["name"]; ?> readonly><br><br>
<button style="width:300" name="submit" value="submit" style="background-color: black" onclick="return mess();">Submit</button> </center>
</div></form>
<script type="text/javascript">
function mess(){
    alert("Data updated successfully!!!");
    return true;
}

</script>

<?php
$id=$name=$date=$cin=$cout=$cleft=$bin=$bout=$bleft=$cgiven=$ename="";

if(isset($_POST['submit'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $cleft=$_POST['cleft'];
    $bin=$_POST['bin'];
    $bout=$_POST['bout'];
    $bleft=$_POST['bleft'];
    $cgiven=$_POST['cgiven'];
    
    $date1=date('Y-m-d');
$cashleft=(($cin*20)+($bin*30))-$cgiven;


$dbc=mysqli_connect('localhost','root','','inderro');
$q="update customer set name='$name',cin=$cin,cout=$cout,cleft=$cleft,bin=$bin,bout=$bout,bleft=$bleft,
cgiven=$cgiven,cashleft=$cashleft where date='$date1' and id=$id";
$result=mysqli_query($dbc,$q);
if($result)
 {  
      header("location:update.php");
      exit();
}
else
    echo "<script>alert('Data Not updated')</script>";
}
?>
<?php
}else echo "<a href='login.php'><h1>Please login first</h1></a>";
?>
</body>
</head>