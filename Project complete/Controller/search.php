<?php
$searchByID = "";
require '../Model/model.php';
$data=showprescription($_GET['id']);
// echo $_GET['id'];
If($data!=null)
{
$id = $data["ID"];
$name = $data["Name"];
$email = $data["Email"];
$mobile_number = $data["Mobile Number"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$appointment_date = $data["Appointment Date"];
$doctor_name = $data["Doctor Name"];
$doctor_id = $data["Doctor ID"];
$medicine = $data["Medicine"];
$test = $data["Test"];

echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Appointment Serial</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Name</th>";
echo "<td  scope='row'>" . $name . "</td>";
echo "<tr>";
echo "<tr>";
echo "<th class='table-dark'>Patient Email</th>";
echo "<td  scope='row'>" . $email . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Mobile Number</th>";
echo "<td  scope='row'>" . $mobile_number . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Gender</th>";
echo "<td  scope='row'>" . $gender . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Date Of Birth</th>";
echo "<td  scope='row'>" . $dob . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Appointment Date</th>";
echo "<td  scope='row'>" . $appointment_date  . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor Name</th>";
echo "<td  scope='row'>" . $doctor_name . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor ID</th>";
echo "<td  scope='row'>" . $doctor_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Medicine</th>";
echo "<td  scope='row'>" . $medicine . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Test</th>";
echo "<td  scope='row'>" . $test . "</td>";
echo "<tr>";

echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="Prescription Serial not Found";
	echo $searchByID;
}

?>