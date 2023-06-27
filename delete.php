<?php
include "data.php";
$id = $_GET['id'];
$sql = "DELETE FROM `data` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
   header("Location: table.php?msg=Record deleted successfully");
} else {
   echo "Failed: " . mysqli_error($conn); 
}
?>