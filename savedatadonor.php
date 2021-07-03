<?php
  $name=$_POST["name"];
  $bg=$_POST["bg"];
  $centrelocation=$_POST["centrelocation"];
  $cn=$_POST["cn"];
  $city=$_POST["city"];
  $lastdonationdate=$_POST["ldd"];
  $cnic=$_POST["cnic"];

  $servername="localhost:3307";
  $username="root";
  $password="";
  $dbname="BDMS-main";
  
  $conn=new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql="INSERT INTO donor( Name, Blood_group, LastDonationDate, Contact_no, cnic, location, city)
  VALUES('$name', '$bg', '$lastdonationdate', $cn, '$cnic', '$centrelocation', '$city')";

  if($conn->query($sql)==TRUE)
  {
    echo "Donor registration done successully!";
  }
  else
  {
    echo "error: " .$sql . "<br>" . $conn->error;
  }

?>