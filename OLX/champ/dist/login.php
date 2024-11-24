<?php


$Email = $_POST['Email'];
$Password = $_POST['Password'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mini_olx";



// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($con->connect_error) {
  die("Connect Error :".$con->connect_error);
}else{
 
     $stmt = $con->prepare("select * from register where Email = ?");
     $stmt->bind_param("s", $Email);
     $stmt->execute();    
     $stmt_result = $stmt->get_result();
     if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();
          if($data['Password'] === $Password){
            header("location:index.html");
          }
     }else {
      echo "<h2> Invalid Password or email</h2>";
     }

   }
     
?>
