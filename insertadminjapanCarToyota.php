<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <link href="formstyle.css" rel="stylesheet">
    <title>adminJapanCar</title>
</head>
<style>
body
{
    background: #886F6F;
}

.form-style-6
{
    position: relative;
    top: -10px;
}

.form-style-6 h1
{
    background: #694E4E;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #F2DDC1;
    border-bottom: 2px solid #F2DDC1;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: black;
    position: relative;
    bottom: 30px;
}

.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover
{
    background: #C37B89;
}

a
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 500px;
    padding: 3%;
    background: #F2DDC1;
    border-bottom: 2px solid #F2DDC1;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: black;
    text-decoration: none;
    position: relative;
    top: -10px;

}

a:hover
{
    background: #C37B89;
}
</style>
<body>

<div class="form-style-6">
<h1>Insert New Comments (Toyota GR Corolla)</h1>
<form action="#" method="POST" enctype="multipart/form-data">
<p>Comments :</p>
<textarea name="comments" placeholder="Enter Comments" required/></textarea><br><br>
<input type="submit" name="submit" value="Submit" />
<a href="adminJapanCar.php">Back</a>
</form>
</div>

<?php
include('connection.php');

if(isset($_POST["submit"]))
{
  //Declaration Variable
  $Comments = $_POST['comments'];

  //SQL Statement
  $query = "INSERT INTO tbladminjapancartoyota VALUES('','$Comments')";
  $result = mysqli_query ($conn, $query);

  if ($result) 
  {
        echo "<script>alert('Your Comment has Sucessfully Submitted!'); document.location = 'adminJapanCar.php'</script>";
  }


  else
  { 
        echo "Update Error :". mysqli_error($conn);
  }
}

?>

</body>
</html>

