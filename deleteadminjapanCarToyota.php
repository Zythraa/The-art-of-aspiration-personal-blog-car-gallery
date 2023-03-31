<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="delete_style.css">
  <link rel="icon" href="images/logo.jpg">
  <title>adminJapanCar</title>
</head>
<body>

<h2>Delete Toyota Car Data</h2>
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
       <tr class="<?php if(isset($delete)) echo $delete;?>">
       <td><?php echo $row["id"]; ?></td>
       <td><?php echo $row['comments']; ?></td>
       <td><a style="color: black" onclick="return confirmdelete()" href="delete_dataadminjapanCarToyota.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
       </tr>
<?php
$i++;
}
mysqli_close ($conn);
?>
</table>
</div>

<script>
function confirmdelete()
{
    return confirm('Are you sure want to Delete this Record?\n\This CANNOT be undone!')
}
</script>

<a href=adminJapanCar.php><button class="button-62" role="button">Back</button></a>
</body>
</html>