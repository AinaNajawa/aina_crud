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
    <link rel="stylesheet" href="student-create.css">
    <title>Edit All</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">



                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <input type="text" fullname="fullname" value="<?=$student['fullname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <input type="number" name="phonenumber" value="<?=$student['phonenumber'];?>" class="form-control">
                                    </div>



                                    <div class="mb-3">
                                        <h1>First Date</h1>
                                            <form action="/action_page.php">
                                            <label for="date">Date:</label>
                                            <input type="date" id="DateFirst" name="Date">
                                            <input type="submit">
                                            </form>
                                        
                                    <div class="mb-3">
                                         <h1>Last Date</h1>
                                            <form action="/action_page.php">
                                            <label for="date">Date:</label>
                                            <input type="date" id="Datelast" name="Date">
                                            <input type="submit">
                                            </form>


                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                        Please Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>