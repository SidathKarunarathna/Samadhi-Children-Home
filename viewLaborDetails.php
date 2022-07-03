<?php
include("connection.php");
$sqlQuery = "SELECT * FROM labour_details ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
?>
<div class="col-12 py-3"></div>
<div class="col-12 pt-5 px-2">
    <p class="navColor py-2 text-white"><i class="fa fa-fw fa-male"></i> View Labour </p>
    <div class="col-sm-12">
        <input type="text" class="form-control mb-2" id="search" placeholder="Search Labour" onkeyup="Search()">
    </div>
</div>
<div class="col-12 d-flex justify-content-center align-content-center ">
    <div class="col-12 px-2 ">
        <table id="data" class="table  table-hover">
            <thead class="navColor">
                <tr>
                    <th>NIC</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Contact No</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Post</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($list = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $list['nic']; ?>">
                        <td><?php echo $list['nic']; ?></td>
                        <td><?php echo $list['name_initals']; ?></td>
                        <td><?php echo $list['dob']; ?></td>
                        <td><?php echo $list['gender']; ?></td>
                        <td><?php echo $list['contact_number']; ?></td>
                        <td><?php echo $list['address']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td><?php echo $list['post']; ?></td>
                        <td>
                           <a href="main.php?edit_labour=<?php echo $list['nic']; ?>">

                                <i class="fa fa-pencil"> </i> Edit

                            </a>

                        </td>
                        
                        <td>
                           <a href="main.php?delete_labour=<?php echo $list['nic']; ?>">

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