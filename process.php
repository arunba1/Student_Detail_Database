<?php
include "database.php";
$sql="INSERT INTO STUDENT VALUES('2','A','7')";
$data=mysqli_query($con,$sql);
if($data){
    //echo "Data inserted successfully";
}
?>
//read , update ,delete
