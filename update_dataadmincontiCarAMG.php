<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/logo.jpg">
<title>Update AMG Car Data</title>

<style>
body
{
   background:#e7e0e8;
}

.form-style-10
{
   max-width:450px;
   padding:30px;
   margin:40px auto;
   background: #FFF;
   border-radius: 10px;
   -webkit-border-radius:10px;
   -moz-border-radius: 10px;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
   -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
   -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}

.form-style-10 .inner-wrap
{
   padding: 30px;
   background: #F8F8F8;
   border-radius: 6px;
   margin-bottom: 15px;
}

.form-style-10 h1
{
   background: #926d91;
   padding: 20px 30px 15px 30px;
   margin: -30px -30px 30px -30px;
   border-radius: 10px 10px 0 0;
   -webkit-border-radius: 10px 10px 0 0;
   -moz-border-radius: 10px 10px 0 0;
   color: #fff;
   text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
   font: normal 30px 'Bitter', serif;
   -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   border: 1px solid #926d91;
}

.form-style-10 h1 > span
{
   display: block;
   margin-top: 2px;
   font: 13px Arial, Helvetica, sans-serif;
}

.form-style-10 label
{
   display: block;
   font: 13px Arial, Helvetica, sans-serif;
   color: #888;
   margin-bottom: 15px;
}

.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select 
{
   display: block;
   box-sizing: border-box;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   width: 100%;
   padding: 8px;
   border-radius: 6px;
   -webkit-border-radius:6px;
   -moz-border-radius:6px;
   border: 2px solid #fff;
   box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
   -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
   -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
   font: normal 20px 'Bitter', serif;
   margin-bottom: 5px;
}

.form-style-10 .section span 
{
   background: #d291bc;
   padding: 5px 10px 5px 10px;
   position: absolute;
   border-radius: 50%;
   -webkit-border-radius: 50%;
   -moz-border-radius: 50%;
   border: 4px solid #fff;
   font-size: 14px;
   margin-left: -45px;
   color: #fff;
   margin-top: -3px;
}

.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]
{
   background: #634d65;
   padding: 8px 20px 8px 20px;
   border-radius: 5px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   color: #fff;
   text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
   font: normal 30px 'Bitter', serif;
   -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
   border: 1px solid #634d65;
   font-size: 15px;
}

.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover
{
   background: #9b7f9d;
   -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
   -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
   box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}

.form-style-10 .privacy-policy
{
   float: right;
   width: 250px;
   font: 12px Arial, Helvetica, sans-serif;
   color: #4D4D4D;
   margin-top: 10px;
   text-align: right;
}

input[type="radio"]
{
  position: relative;
  left: 250px;
  bottom: 12px;
}

.gift
{
   position: relative;
   top: 10px;
}

</style>
</head>

<body>

<?php
include ("connection.php");
$sql = "SELECT * FROM tbladminconticaramg WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query ($conn, $sql) or die("Select Error ". mysqli_error($conn));
$row = mysqli_fetch_array($result);

if (isset($_POST['update'])) 
{

$Comments = $_POST['comments'];

$sql = "UPDATE tbladminconticaramg SET comments='$Comments' WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query ($conn, $sql);

if ($result) 
{
   echo "<script>alert('Record has Sucessfully Updated!'); document.location = 'updateadmincontiCarAMG.php?id=".$row['id'].";'</script>";
}

else
   echo "Update Error :". mysqli_error($conn);
}
?>

<div class="form-style-10">
<h1>Continental Car<span>Update Information</span></h1>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="section">AMG Details</div>
    <div class="inner-wrap">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /></td>
        <label>Comments<input type="text" name="comments" value="<?php echo $row['comments']; ?>"/></label> 

            <div class="button-section">
     <input style="position: relative; top: 7px;" type="submit" name="update" value="Update"/>      
    </div>
    </div>
</form>
</div>

<a href="updateadmincontiCarAMG.php" class="back" style="position: relative; left: 500px; bottom: 19px; font-size: 18px; font-weight: bold; color: #634d65;">Back</a>

<a href="adminContiCar.php" class="back" style="position: relative; left: 510px; bottom: 19px; font-size: 18px; font-weight: bold; color: #634d65;">Home Page</a>

</body>
</html>
