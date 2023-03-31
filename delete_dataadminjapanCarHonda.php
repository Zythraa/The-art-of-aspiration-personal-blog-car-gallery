<?php
include ("connection.php");
$sql = "DELETE FROM tbladminjapancarhonda WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) 
{
    header("location:deleteadminjapanCarHonda.php");
} 

else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 