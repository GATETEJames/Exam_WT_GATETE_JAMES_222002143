<?php
include("db.php");
 if (isset($_POST['comments'])) {
$comment=$_POST['comment'];
$insert=mysqli_query($con,"insert into comments values('','$comment')");
if ($insert) {
         // Update successful, redirect to view products page
        echo "<script>alert('thank you for your comment');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
         exit();
         }
        else{
             echo "sorry! try again".$con->connect_error;
        }
    }
  ?>