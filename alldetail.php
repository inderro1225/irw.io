<?php
session_start();
?>
<html>
<head>
<title>ALL DETAILS</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
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
</head>

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
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="update.php">Update</a>
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:red" href="logout.php" >Logout</a>
  </li>
</ul><br>
<!--<a href="index.php"><button style="color:blue;height:50;width:600">HOME</button></a><br><br>--->
<center><h1> <b>VIEW ALL DETAILS</b></h1>
  <label><b>FROM DATE</b></label><br>
    <input type= "text" style="width:300"  name="fd"><br>
    <label><b>TO DATE </b></label><br>
    <input type= "text" style="width:300" name="td"><br><br>
    <button style="width:300" name="submit" value="submit">Submit</button> <br><br>
<p><b>-------------------------------------------------------------------------------------------------------</b></p>
</center>
<!----<a href="logout.php" tite="Logout"><button style="color:red;height:50;width:600">Logout</button></a><br>--->
</form>

<?php
//$fd=$td="";
if(isset($_POST['submit'])) {
$fd=$_POST['fd'];
$td=$_POST['td'];


$dbc=mysqli_connect('localhost','root','','inderro') or die('Unable To connect');
$result = mysqli_query($dbc,"SELECT * FROM customer WHERE date>='$fd' and date<='$td'");


echo "<table border='2'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Camper In</th>
<th>Camper out</th>
<th>Bottle In</th>
<th>Bottle Out</th>
<th>Cash Given</th>
<th>Cash Left</th>
<th>Ename</th>
</tr>";

$q1="SELECT id, name, sum(cin) ,sum(cout),sum(bin),sum(bout),sum(cgiven),sum(cashleft),ename from customer";
$result1=mysqli_query($dbc,$q1);
while($row1= mysqli_fetch_array($result1)){
    echo "<tr>";
    echo "<td>".$row1['id'] ."</td>";
    echo "<td>".$row1['name'] ."</td>";
    echo "<td>".$row1['sum(cin)'] ."</td>";
    echo "<td>".$row1['sum(cout)']."</td>";
    echo "<td>".$row1['sum(bin)']."</td>";
    echo "<td>".$row1['sum(bout)']."</td>";
    echo "<td>".$row1['sum(cgiven)']."</td>";
    echo "<td>".$row1['sum(cashleft)']."</td>";
    echo "<td>".$row1['ename']."</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><br>";

//table
echo "<table border='2'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Date</th>
<th>Camper In</th>
<th>Camper out</th>
<th>Camper left</th>
<th>Bottle In</th>
<th>Bottle Out</th>
<th>Bottle left</th>
<th>Cash Given</th>
<th>Cash Left</th>
<th>Ename</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['cin'] . "</td>";
    echo "<td>".$row['cout']."</td>";
    echo "<td>".$row['cleft']."</td>";
    echo "<td>".$row['bin']."</td>";
    echo "<td>".$row['bout']."</td>";
    echo "<td>".$row['bleft']."</td>";
    echo "<td>".$row['cgiven']."</td>";
    echo "<td>".$row['cleft']."</td>";
    echo "<td>".$row['ename']."</td>";
    echo "</tr>";
}
echo "</table><br><br>";


mysqli_close($dbc);

}?>
<?php
//adma nd enmp comparsision
}
else
{header("location:login.php");}
?>


<?php
}else echo "<a href='login.php'><h1>Please login first</h1></a>";
?>
</body>
</html>