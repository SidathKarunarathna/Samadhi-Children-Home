<?php
include('Connection.php');
  $donarName = $_POST['name'];
  $contactNo  = $_POST['contact_no'];
  $Address = $_POST['address'];
  $donationType = $_POST['type'];
  $query = "INSERT INTO `donars`(`donar_id`, `donarName`, `contactNo`, `Address`, `donationType`, `date`) VALUES (null,'$donarName','$contactNo','$Address','$donationType',NOW())";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('Donar Added successfully ')</script>";
    echo "<script> window.open('main.php?view_donation','_self')</script>";
  }
?>