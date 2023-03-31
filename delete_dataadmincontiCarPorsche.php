<?php
include ("connection.php");
$sql = "DELETE FROM tbladminconticarporsche WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) 
{
    header("location:deleteadmincontiCarPorsche.php");
} 

else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 