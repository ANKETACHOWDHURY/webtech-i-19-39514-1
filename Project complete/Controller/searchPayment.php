<?php
$searchByID = "";
require '../Model/model.php';
$data=showpayment($_GET['id']);
// echo $_GET['id'];
If($data!=null)
{
$id = $data["ID"];
$name = $data["Name"];
$appointment_date = $data["Appointment Date"];
$doctor_name = $data["Doctor Name"];
$doctor_id = $data["Doctor Id"];
$payment = $data["Payment"];

echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Payment ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Name</th>";
echo "<td  scope='row'>" . $name . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Appointment & Payment Date</th>";
echo "<td  scope='row'>" . $appointment_date  . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor Name</th>";
echo "<td  scope='row'>" . $doctor_name . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor Id</th>";
echo "<td  scope='row'>" . $doctor_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Payment Amount/Doctor Fee</th>";
echo "<td  scope='row'>" . $payment . "</td>";
echo "<tr>";

echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="Payment ID not Found";
	echo $searchByID;
}

?>