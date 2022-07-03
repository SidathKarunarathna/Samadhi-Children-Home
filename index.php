<?php

session_start();

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4f128951c5.js" crossorigin="anonymous"></script>
  <style>
    .card-body {
      background-color: #f1ffeb;
    }
  </style>
</head>

<body style="background-image: url(login.jpg); background-repeat: no-repeat ;background-size: cover ;"> 

<div class=" container-fluid">
        <div class="row vh-100 align-items-center ">


            <div class="col-lg-8 d-none d-lg-block g-0 vh-100 bg-img" >




            </div>


            <div class="col-12 col-lg-4 bg-dark" style="opacity: 0.8;">

                <p class="text-center display-4 text-light">SAMADHI</p>
                <p class="text-center display-6 text-light"> CHILDEREN'S HOME</p>

                <form class="m-lg-5 border p-2 " action="index.php" method="POST">
                    <div class="">
                    <label for="name " class="form-label text-light">Username</label>
                     <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" >
                    </div>
                    <div class="">
                    <label for="password" class="form-label text-light">Password</label>
                     <input type="password" class="form-control" id="password" name="pass" >
                    </div>
                    <div class="col-12">
                    <button type="submit " class="btn btn-primary" name="login" >Submit</button>
                    </div>

                </form>


            </div>


        </div>
    </div>
  <script>
    function validate() {
      document.getElementById("form").submit();
    }

    function allLetter(inputtxt) {
      var letters = /^[A-Za-z]+$/;
      if (inputtxt.value.match(letters)) {
        return true;
      }
      else {
        alert("message");
        return false;
      }
    }
  </script>
</body>

</html>

<?php

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($Con,$_POST['name']);
    
    $pass = mysqli_real_escape_string($Con,$_POST['pass']);
    $query = "SELECT * FROM staff WHERE name='$uname' AND password='$pass'";
    $run_admin = mysqli_query($Con,$query);
    $count = mysqli_num_rows($run_admin);

if($count==1){
    $_SESSION['username']=$uname;
    echo "<script>alert('You are Logged in into system ')</script>";
    echo "<script>window.open('main.php?overview','_self')</script>";

}
else {
  echo "<script>alert('Username or Password is Wrong')</script>";

}

}

?>