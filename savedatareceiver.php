<?php
  $name=$_POST["name"];
  $age=$_POST["age"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $bg=$_POST["bg"];
  $location=$_POST["location"];
  $contactnumber=$_POST["cn"];
  $city=$_POST["city"];
  $registrationdate=$_POST["rd"];
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

  $sql="INSERT INTO recipient( Name, Age, DateOfBirth, Gender, BloodGroup, Location, ContactNo, City, RegistrationDate, CNIC)
  VALUES('$name', '$age' , '$dob', '$gender', '$bg', '$location', '$contactnumber', '$city', '$registrationdate', '$cnic')";

  if($conn->query($sql)==TRUE)
  {

    echo "Receiver registration done successully!";
  }
  else
  {
    echo "error: " .$sql . "<br>" . $conn->error;
  }

?>

