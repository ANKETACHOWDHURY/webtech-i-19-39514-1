<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
<div class="left">
	<img class="logo" src="Uploads/modern_medical.png" alt="Profile Picture"> 
</div>	
<br><br>
<div class="right">
	<?php echo "Logged in as ".$_SESSION['category']."||".$_SESSION['name']."||"; ?>
	<a href="welcome.php">Home</a>
	<a href="My Prescription.php">My Prescription</a>	
	<a href="patient Payment.php">Patient Payment</a>
	<a href="viewProfile.php">View Profile</a>
	<a href="Controller/logout.php">Logout</a>
</div>
</header> 
<br><br>
<hr>

</body>
</html>