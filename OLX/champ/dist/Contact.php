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


// Create connection
$con = new mysqli ('localhost', 'root','','mini_olx');

if($con->connect_error){
  echo 'database connection error';
}

$stmt =$con->prepare( "INSERT Into contact (firstname ,lastname ,city ,pincode,productprice,productname,email,phone,message) values(?,?,?,?,?,?,?,?,?)");

      $stmt->bind_param("sssiissis", $firstname ,$lastname ,$city ,$pincode,$productprice,$productname,$email,$phone,$message);
      
      if($stmt->execute()){
      echo "New record inserted sucessfully";
     }else {
      echo "Someone already register using this email";
     }

    

