<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f128951c5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .accordion-button:focus {
            z-index: 3;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(134, 183, 254, .1);
            background-color: #0F52BA;
        }
        .accordion-button:not(focus) {
            background-color: #002366;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: none;
            transform: rotate(-180deg);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: none;
            transform: rotate(-180deg);
        }

        a {
            text-decoration: none;
            color: white;
        }

        .tb_data a {
            color: black;
        }

        .tb_data a:hover {
            color: blue;
        }
        
        .card-body a {
            color: rgb(245, 245, 255);
        }
        .bg-blue{
            background-color: #337ab7;
        }
        .navColor{
            background-color: #002366;
            color: white;
        }
        .nav:hover{
            background-color: #0F52BA;
        }
        .collapseColor{
            background-color: #5089C6;
        }
    </style>
</head>

<body>
    <?php include("connection.php");  ?>
    <?php include("Navigation_penel.php");  ?>
    

    <div class="col-lg-10 vh-100 bg-light d-lg-block" style="overflow-y: scroll;">
        <?php
        if (isset($_GET['overview'])) {

            include("overview.php");
        }

        // Add users start
        if (isset($_GET['add_child'])) {

            include("addChild.php");
        }

        if (isset($_GET['add_doner'])) {

            include("addDonar.php");
        }

        if (isset($_GET['add_staff'])) {

            include("addStaff.php");
        }

        if (isset($_GET['add_labour'])) {

            include("addLabor.php");
        }
        //add users end

        // Views start
        if (isset($_GET['view_donation'])) {

            include("viewDonation.php");
        }

        if (isset($_GET['view_staff'])) {

            include("viewStaff.php");
        }

        if (isset($_GET['view_child'])) {

            include("viewChild.php");
        }

        if (isset($_GET['view_labour'])) {

            include("viewLaborDetails.php");
        }
        if (isset($_GET['view_labour_salary'])) {

            include("viewLaborSalary.php");
        }

        if (isset($_GET['view_donar'])) {

            include("viewDonar.php");
        }
        //View End

        //edit users start

        if (isset($_GET['edit_child'])) {

            include("editChild.php");
        }

        if (isset($_GET['edit_staff'])) {

            include("editStaff.php");
        }
        if (isset($_GET['edit_labour'])) {

            include("editLabor.php");
        }

        //edit users end

        //Delete users start
        if (isset($_GET['delete_child'])) {

            include("deleteChild.php");
        }

        if (isset($_GET['delete_staff'])) {

            include("deleteChild.php");
        }

        if (isset($_GET['delete_labour'])) {

            include("deleteLabor.php");
        }

        //Delete users end


        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>


</html>