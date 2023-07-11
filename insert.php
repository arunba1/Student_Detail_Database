<?php
include "database.php";
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
    <title></title>
</head>
<body>
    <center>
        <fieldset>
    <form method="GET" action="">
            rollno<input type="text" name="rollno" value="" ><br><br>
            name<input type="text" name="name" value="" ><br><br>
            class<input type="text" name="class" value=""><br><br>
            <button type="submit" name="submit" value="submit">Insert</button>
</form>
</fieldset>
</center>
</body>
</html>

<?php
if($_GET['submit']){
    $rn=$_GET['rollno'];
    $name=$_GET['name'];
    $class=$_GET['class'];
    if($rn!="" && $name!="" && $class!=""){
        $sql="INSERT INTO STUDENT VALUES('$rn','$name','$class')";
        $data=mysqli_query($con,$sql);
        if($data){
            echo "Data inserted successfully";
        }
    }
    else{
        echo "All fields are required";
    }
}

?>