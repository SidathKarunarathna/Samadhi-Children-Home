<?php

if(isset($_GET['delete_labour'])){

$delete_id = $_GET['delete_labour'];

$query = "DELETE FROM labour_details WHERE nic='$delete_id'";

$deleted = mysqli_query($Con,$query);

if($deleted){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('main.php?view_labour','_self')</script>";

}

}

?>