<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="indexx.css">
    

    <title>Am Seeema Worldwide</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details
                            <a href="student-create.php" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>First Date</th>
                                    <th>Last Date</th>
                                    <th></th>
                                    <th>Time</th>
                                    <th>Action</th>
                                    <th>Picture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = mysqli_query($con, "SELECT * FROM student");
                                    $row = mysqli_num_rows($query);
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?= $data['id']; ?></td>
                                            <td><?= $data['fullname']; ?></td>
                                            <td><?= $data['phonenumber']; ?></td>
                                            <td><?= $data['firstdate']; ?></td>
                                            <td><?= $data['lastdate']; ?></td>
                                            <!-- <td><?= $data['time']; ?></td> -->
                                            <td>

                                                <a href="student-view.php?id=<?= $data['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <!-- <a href="sudent-edit.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Edit</a> -->
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?=$data['id'];?>" class="btn btn-danger btn-sm">Delete</button>

                                                            <!-- <?php

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `tblcard` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?> -->
        <!-- <label for="">:</label>
        <td><input type="file" name="image" value="
        <?php echo $data['Image'] ?>"><img src="<?php echo $data['Image'] ?>
        "  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">

        </form> -->
    


                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>  
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>