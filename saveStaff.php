<?php
include('connection.php');
  $nic = $_POST['nic'];
  $name = $_POST['name'];
  $contactNo  = $_POST['contact_no'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "INSERT INTO `staff`(`nic`, `name`, `contact_num`, `address`, `email`, `password`) VALUES ('$nic','$name','$contactNo','$address','$username','$password')";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('User Added successfully ')</script>";
    echo "<script> window.open('main.php?view_staff','_self')</script>";
  }
?>