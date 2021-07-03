<?php
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];

  $servername="localhost:3307";
  $username="root";
  $password="";
  $dbname="BDMS-main";
  
  $conn=new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql="INSERT INTO contact( FirstName, LastName, Email, Subject, AboutUs)
  VALUES('$fname', '$lname', '$email', '$subject', '$message')";

if($conn->query($sql)==TRUE)
{
  echo "Thank you for getting in touch, we hope to see you again!";
}
else
{
  echo "error: " .$sql . "<br>" . $conn->error;
}

?>