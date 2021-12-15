<!DOCTYPE html>
<html>
<body>
<title>Login</title>
<style type = "text/css">
    *{
        margin = 0;
        padding = 0;
    }
    body{
        background-image:url(Images/wraper.jpg);
        background-position:centre;
        background-size:auto;
        background-repeat:repeat;
        font-family:sans-serif;
        margin-top:40px;
        }
    .loginpg{
        width:800px;
        background-color:rgb(0,0,0,0.6);
        margin:auto;
        color:#FFFFFF;
        padding:10px 0px 10px 0px;
        text-align:center;
        border-radius:15px 15px 0px 0px;
        }
    .main{
        background-color:rgb(0,0,0,0.5);
        width:800px;
        margin:auto;
        }
    form{
        padding:10px;
    }
    .name{
        margin-left:25px;
        margin-top:30px;
        wdith:125px;
        color:white;
        font-size:18px;
        font-weight:700;
        }
    .username{
        position:relative;
        left:250px;
        top:-37px;
        line-height:40px;
        width:430px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
        color:#555;
        }
    .password{
        position:relative;
        left:250px;
        top:-37px;
        line-height:40px;
        width:430px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
        color:#555;
        }
    button{
        position:relative;
        background-color:#0000FF;
        display:block;
        margin:20px 0px 20px 0px;
        text-align:center;
        font-size:25px;
        border-radius:12px;
        border:2px solid #366473;
        padding:14px 110px;
        outline:none;
        color:white;
        cursor:pointer;
        transition:0.25px;
        }
    button:hover{
        background-cover:#5390F5;
        }
    .extra{
        margin-left:25px;
        margin-top:30px;
        wdith:125px;
        color:white;
        font-size:18px;
        font-weight:700;
        }
    .tc:link{
        color:yellow;
        text-decoration:none;
    }
    .tc:hover{
        color:orange;
    }
</style>
</body>
<body>
<?php
session_start();

// Create connection
$con = mysqli_connect("","root","","cardb","3306");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
$sql = "SELECT name, password FROM cardb WHERE name='$name' AND password='$password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        header("location:home.php");
    }
} else {
    echo "Invalid username or password";
}

mysqli_close($con);
}
?>
<div class = "loginpg"><h1>Login page</h1></div>
<div class = "main">
<form class ="login" method="post">
<h2 class = "name">Enter your username</h2>
<input class = "username" type="text" name = "name" maxlength = "255" required><br>
<h2 class = "name">Enter your password</h2>
<input class = "password" type="password" name="password" required><br>
<button type="submit" value="Login" name="submit">Log in</button><br>
<p class ="extra">Not a member?  <a href="index.php" class="tc">Register here</a></p>
</form>


</body>
</html>