<?php
include ("connection.php");
$sql = "DELETE FROM tbladminconticarVantage WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) 
{
    header("location:deleteadmincontiCarVantage.php");
} 

else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 