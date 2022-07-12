<?php  
require_once 'Controller/allpaymentinfo.php';

$payments = fetchAllPayments();

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Patient</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS/style.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:Login.php");}
?>
<div class="container">
	<div class="container-fluid, textCenter">
		<h1>Search Payment History</h1>
		<h4>Enter Payment No: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="searchPayment(this.value)" onblur="searchPayment(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
	
	</div>
</div>


	<div id="txtHint">

<h3 class="container-fluid, textCenter">All History of My Payment</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Payment ID</th>
			<th>Patient Name</th>
			<th>Appointment & Payment Date</th>
			<th>Doctor ID</th>
			<th>Doctor Name</th>
			<th>Payment Amount/Doctor Fee</th>			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($payments as $i => $payment): ?>
			<tr>
			
				<td><?php echo $payment['ID'] ?></td>
				<td><?php echo $payment['Name'] ?></td>
				<td><?php echo $payment['Appointment Date'] ?></td>
				<td><?php echo $payment['Doctor Id'] ?></td>
				<td><?php echo $payment['Doctor Name'] ?></td>
				<td><?php echo $payment['Payment'] ?></td>
		
			</tr>
		<?php endforeach; ?>
		
	</tbody>
	
</table>
</div>

<?php require 'Bar/footer.php';?>

</div>

</body>
</html>