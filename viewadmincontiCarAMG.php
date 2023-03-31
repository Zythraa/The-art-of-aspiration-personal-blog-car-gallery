<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="update_style.css">
  <link rel="icon" href="images/logo.jpg">
  <title>adminContiCar</title>
</head>
<body>

<?php
echo "<h2>View all Comments in Car AMG</h2>"?>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Comments</th>
        </tr>
        </thead>

        <?php
        include ("connection.php");
        $sql = "SELECT * FROM tbladminconticaramg";
        $result = mysqli_query ($conn, $sql) or die("Select Error ". mysqli_error($conn));
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
        ?>

       <tr>
           <td><?php echo $i; ?></td>
           <td><?php echo $row['comments']; ?></td>
      </tr>

       <?php
       $i++;
       }
       mysqli_close ($conn);
       ?>
    </table>
</div>
<a href=adminContiCar.php style="position: relative; right: 75px;"><button class="button-62" role="button">Back</button></a>
</body>
</html>