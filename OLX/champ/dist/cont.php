<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$productprice  = $_POST['prodectprice'];
$productname= $_POST['prodectname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];

if (!empty($Username) || !empty($Email)
   )

{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mini_olx";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}else{
 
  $INSERT = "INSERT Into contact (firstname ,lastname ,city ,pincode,productprice,productname,email,phone,message) values(?,?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $Email);
     $stmt->execute();
     $stmt->bind_result($Email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiissis", $firstname ,$lastname ,$city ,$pincode,$productprice,$productname,$email,$phone,$message);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
