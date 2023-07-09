<?php
session_start();
include("database.php");
?>
<html>
    <head>
</head>
<body>
<link rel="stylesheet" href="design.css">
<center>
<h1 id="arabi"><u>Registration Page</u></h2>
    <br>
<div id="vasa">
<fieldset>
    <center>
    <h3>Login Now</h3>
    <div id="gbat">Login Credentials</div>
    <hr>
<form action="" method="post">
    Username:<input type="text" name="username" value=""/><br><br>
    Password:<input type="password" name="password" value=""/><br><br>
    <button type="submit" name="submit" value="Login">Login</button>
</form>
</center>
</fieldset>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $query="SELECT * FROM LOGINANDREGISTRATION WHERE username='$user' && password='$pwd'"; 
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1){
        $_SESSION['user_name']=$user;
        header('location:home.php');
    }
    else{
        echo "Login Failed";
    }
}