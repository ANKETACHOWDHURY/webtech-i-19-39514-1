<?php

require_once 'Model/model.php';

if (isset($_SESSION['name'])){}
else
  {  $name = $email = $mobile_number  = $address = $password = $confirm_password = $gender = $category = $dob = $encrypted_password = '';}

$nameErr = $emailErr = $mobile_numberErr = $addressErr = $passwordErr = $confirm_passwordErr = $genderErr = $categoryErr = $dobErr = '';
$flag=1;
$update="on";  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name Required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
      $update="off";
    }
  }

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid Email Format";
      $email="";    
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["mobile_number"])) 
  {
    $mobile_numberErr = "Mobile Number Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $mobile_number = test_input($_POST["mobile_number"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['mobile_number']))
    {
      $mobile_numberErr = "Invalid Number";
      $mobile_number="";
      $flag=0;
      $update="off";
    }
  }

  if (empty($_POST["address"])) 
  {
    $addressErr = "Address Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password Required";
    $flag=0;
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) < 8)
    {
      $passwordErr = "Must Be Atleast 8 Characters";
      $password="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $password ="";
      $flag=0;
    }
  }

  if (empty($_POST["confirm_password"])) 
  {
    $confirm_passwordErr = "Password Required";
    $flag=0;
  } 
  else 
  {
    $confirm_password = test_input($_POST["confirm_password"]);
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "Password Dosen't Match";
      $confirm_password="";
      $flag=0;
    }
  }

  if(empty($_POST["gender"]))  
  {  
    $genderErr = "Select Gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = test_input($_POST["gender"]);
  } 

  if(empty($_POST["category"]))  
  {  
    $categoryErr = "Select category"; 
    $flag=0; 
  }
  else 
  {
    $category = test_input($_POST["category"]);
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = test_input($_POST["dob"]);
    if (time() < strtotime('+18 years', strtotime($dob))) 
    {
      $dobErr = 'Minimum 18+';
      $flag=0;  
      }
  }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {
      $encrypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 10]);
      if(addData($encrypted_password))
      {
        echo 'Registration Completed';
      }
    }  
  }
  if($update=="on")
  {
    if(isset($_POST["submit"]) && isset($_SESSION['name']))
    {
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['mobile_number'] = $_POST['mobile_number'];
      $data['address'] = $_POST['address'];
      $data['shift'] = $_POST['shift'];

      if (updateData($_SESSION['id'], $data)) 
      {
        echo 'Successfully Updated';
      }
    }
  }    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>