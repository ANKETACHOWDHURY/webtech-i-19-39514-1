<!DOCTYPE html>
<html>
<head>
<title>My Prescription</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 
?>
<h1 class="textCenter">My Prescription</h1><br><br>
<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset class="loginFildset"style="width: 400px">
 <legend>My Prescription</legend>

 <label for="prescribe date">Prescribe Date:</label>
  <input type="date" id="prescribe date" name="prescribe date">
  <br><br>

  <label for="doctor name">Doctor Name:</label>
  <input type="text" id="doctor name" name="doctor name"value="Arnab Saha">
  <br><br>

  <label for="doctor id">Doctor Id:</label>
  <input type="number" id="doctor id" name="doctor id"value="159764">
  <br><br>

  <label for="test">Test:</label>
  <textarea id="test" name="test" rows="4" cols="50">Amylase Test, CT Scans, MRI Scans
  </textarea>
  <br><br>


<label for="medicine">Medicine:</label>
  <textarea id="medicine" name="test" rows="4" cols="50">Generic Synthroid, Amoxicillin 
  </textarea>
  <br><br>

  <input type="submit" value="Submit">

 </style=>
</form> 
</div>

<?php require 'Bar/footer.php';?>


</body>
</html>