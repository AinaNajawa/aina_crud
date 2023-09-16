<?php
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

    <title>View Data</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details 
                        <a href="indexx.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <p class="form-control">
                                            <?=$student['fullname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <p class="form-control">
                                            <?=$student['phonenumber'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>First Date</label>
                                        <form action="/action_page.php">
                                            <label for="date">First Date:</label>
                                            <input type="date" id="Datefirst" name="Date">
                                            <!-- <input type="submit"> -->

                                        <p class="form-control">
                                            <?=$student['firstname'];?>
                                        </p>



                                    </div>
                                    <div class="mb-3">
                                        <label>Last Date</label>
                                        <form action="/action_page.php">
                                            <label for="date">Last Date:</label>
                                            <input type="date" id="Datelast" name="Date">
                                            <!-- <input type="submit"> -->

                                        <p class="form-control">
                                            <?=$student['lastdate'];?>
                                        </p>


                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                                <div class= "row">
                                <?php
                                if (isset($_SESSION['erro'])){

                                   " <div class= 'alert-danger text-center'>
                                    <button class='close'>$time;</button>
                                    ".$_SESSION['erro']."
                                    </div>
                                    ";
                                    unset($_SESSION['error']);
                                }
                                if(isset($_SESSION['success'])) {

                                    echo" <div class='alert alert-success text-center'>
                                <button class= 'close'>$times;</button>
                                ".$_SESSION['erro']."
                                </div>
                                ";
                                unset($_SESSION['success']);
                                }
                                ?>
                            </div>

                            <!-- <div class="row">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-pus"></span>New</a>

                            </div> -->


                            <div class="mb-3">
                                <!-- <button type="submit" name="save_student" class="btn btn-primary">Save</button> -->
                                <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></spam>Print</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>