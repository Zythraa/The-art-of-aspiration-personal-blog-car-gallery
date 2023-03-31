<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="update_style.css">
  <link rel="icon" href="images/logo.jpg">
  <title>Update Toyota Car Data</title>
</head>
<body>

<h2>Update Toyota Car Data</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Comments</th>
            <th>Action</th>
        </tr>
        </thead>

<?php
include ("connection.php");
$result = mysqli_query($conn,"SELECT * FROM tbladminjapancartoyota");
$i=0;
while($row = mysqli_fetch_array($result)) 
{
?>
       <tr class="<?php if(isset($update)) echo $update;?>">
       <td><?php echo $row["id"]; ?></td>
       <td><?php echo $row['comments']; ?></td>
       <td><a style="color: black" onclick="return confirmupdate()" href="update_dataadminjapanCarToyota.php?id=<?php echo $row["id"]; ?>">Update</a></td>
       </tr>
<?php
$i++;
}
mysqli_close ($conn);
?>
</table>
</div>

<script>
function confirmupdate()
{
    return confirm('Are you sure want to Update this Record?')
}
</script>

<a href=adminJapanCar.php><button class="button-62" role="button">Back</button></a>
</body>
</html>