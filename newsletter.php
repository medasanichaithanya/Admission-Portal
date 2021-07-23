<?php
session_start();

$name = $_POST['n-name'];
$email =$_POST['n-email'];
$subject = $_POST['n-sub'];
$message = $_POST['n-text'];



$conn = new mysqli("localhost","root","","admission");


if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
  $SELECT = "SELECT email FROM news Where email = ? Limit 1";
  $INSERT = "INSERT into news(name,email,subject,message) values(?,?,?,?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rnum = $stmt->num_rows;
  if($rnum == 0){
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss",$name,$email,$subject,$message);
      $stmt->execute();
      echo "<script>alert('Thank you for your feedback $name');</script>";
      header("refresh:0.1;url=index.html");

    }
    else{
      echo "Email already registered";
    }
    $stmt->close();
    $conn->close();
}

?>