<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="CSS/style.css"> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>REGISTRATION</legend>                 
  <form method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="mobile_number">Mobile Number :</label>
  <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="address">Address :</label>
  <input type="text" id="address" name="address">
  <span class="error"> <?php echo $addressErr;?></span><hr>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password">
  <span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <span class="error"> <?php echo $confirm_passwordErr;?></span><hr>


<fieldset>
<legend> Category</legend> 
  <input type="radio" id="doctor" name="category" value="Doctor">
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient">
  <label for="patient">Patient</label> 
  <input type="radio" id="receptionist" name="category" value="Receptionist">
  <label for="receptionist">Receptionist </label>  
  <span class="error"> <?php echo $categoryErr;?></span>
 </fieldset><hr>

<fieldset>
<legend> Gender</legend> 
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
 </fieldset><hr>

<fieldset>
  <legend>Date of Birthday</legend>
  <input type="date" name="dob"> 
  <span class="error"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  