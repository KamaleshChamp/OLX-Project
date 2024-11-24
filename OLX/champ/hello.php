<?php
session_start();
echo session_id().'<br>';

$_SESSION['counter'] ??=0;
$_SESSION['counter']++;


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>champ</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>
</head>


      
      <nav class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
      </nav>
      
<?php

setcookie("username","kamalesh",time()-86400);


  $_SESSION['username']="kamalesh ";
  echo $_SESSION['username'];

if(!isset($_SESSION['username'])){
  echo "we wecome you";
}else {
  echo "thanks for visits";
}

?>

<h1> you visited page : <?php echo $_SESSION['counter'] ?></h1>

</body>
</html>
