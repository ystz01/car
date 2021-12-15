<?php
$con = mysqli_connect("","root","","cardb","3306");

$name = $_POST['name'];
$password = $_POST['password'];
$ic= $_POST['icno/passport'];
$carplate= $_POST['car-plate'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$a=$_POST['purpose'];  
$b=$_POST['ehailing'];

$sql = "INSERT INTO cardb(name, password, ic, carplate,email, phone, purpose, ehailing)
 VALUES ('$name','$password','$ic','$carplate','$email','$phone','$a','$b')";
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if (!mysqli_query($con, $sql)) {
  echo "Data has not saved";
  header ('Location: index.php');
} else{
  echo "Data is saved successfully";
  header ('Location: login.php');
}

?>
