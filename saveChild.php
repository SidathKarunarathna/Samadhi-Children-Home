<?php
include('connetion.php');
  $name_with_initials = $_POST['name_with_initials'];
  $fname = $_POST['fname'];
  $dob  = $_POST['dob'];
  $gender = $_POST['gender'];
  $query = "INSERT INTO `child_details`(`id`, `name_initials`, `full_name`, `gender`, `dob`)"."VALUES (null,'$name_with_initials','$fname','$gender','$dob')";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('Child Added successfully ')</script>";
    echo "<script> window.open('main.php?view_child','_self')</script>";
  }
?>