<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta  http-equiv="description" content="" />
<meta http-equiv="keywords" content="" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<title>School Infomation</title>
<link rel="stylesheet" href="css/school_search.css" type="text/css" />
<link rel="stylesheet" href="css/common.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE jsun35;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database jsun35";
} else {
   echo "Error using  database: " . $conn->error;
}
?>

<div class="background">



<?php
$sql = "SELECT * FROM school";
$result = $conn->query($sql);

if($result->num_rows > 0){
?>

<table class="bro_table">
<tr>
  <td colspan="7" class="bro_title">
    <h1>School Information</h1>
  </td>
</tr>
<tr valign="top">
  <td>School Name</td>
  <td>School Size</td>
  <td>Gender Ratio</td>
  <td>Student-Faculty Ratio</td>
  <td>School Rank</td>
  <td>Tuition Fee</td>
  <td>School Location</td>
</tr>

<?php
while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?php echo $row['SchoolNmae']?></td>
    <td><?php echo $row['SchoolSize']?></td>
    <td><?php echo $row['GenderRatio']?></td>
    <td><?php echo $row['StudentFacultyRatio']?></td>
    <td><?php echo $row['Rank']?></td>
    <td><?php echo $row['Tuition']?></td>
    <td><?php echo $row['SchoolLocation']?></td>
</tr>

<?php
}
}
else {
echo "School not found";
}
?>

</table>


<?php
$conn->close();
?>  

</div>
</body>
</html>
