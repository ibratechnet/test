<?php
include 'connect.php';
$id=$_GET['nbr'];
$sql =" DELETE FROM Motion_Data WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("location: select.php");
    // echo "Data Successsfully Deleted";
}
else{
    // echo"Failed to delete data";
}

?>

