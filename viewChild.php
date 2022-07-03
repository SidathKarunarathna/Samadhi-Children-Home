<?php
include("connection.php");
$sqlQuery = "SELECT * FROM child_details ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
?>
<div class="col-12 py-3"></div>
<div class="col-12 pt-5 px-2">
    <p class="navColor  py-2 text-white"><i class="fa fa-fw fa-male"></i> View Child </p>
    <div class="col-sm-12">
        <input type="text" class="form-control mb-2" id="search" placeholder="Search Child" onkeyup="Search()">
    </div>
</div>
<div class="col-12 d-flex justify-content-center align-content-center ">
    <div class="col-12 px-2 ">
        <table id="data" class="table  table-hover">
            <thead class="navColor">
                <tr>
                    <th>ID</th>
                    <th>Name with Initials</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($result = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $result ['id']; ?>">
                        <td><?php echo $result ['id']; ?></td>
                        <td><?php echo $result ['name_initials']; ?></td>
                        <td><?php echo $result ['full_name']; ?></td>
                        <td><?php echo $result ['gender']; ?></td>
                        <td><?php echo $result ['dob']; ?></td>
                        <td>
                           <a href="main.php?edit_child=<?php echo $result ['id']; ?>">

                                <i class="fa fa-pencil"> </i> Edit

                            </a>

                        </td>
                        
                        <td>
                           <a href="main.php?delete_child=<?php echo $result ['id']; ?>">

                                <i class="fa fa-trash-o"> </i> Delete

                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="search.js"></script>