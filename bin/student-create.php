<?php
session_start();

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
    <title>Am Seeema Worldwide</title>


</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD 
                            <a href="indexx.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                               <b> <label>Full Name</label></b>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <b><label>Phone Number</label></b>
                                <input type="text" name="text" class="form-control">
                            </div>

                            <div>
                                <form action="/action_page.php">
                                <b><label for="appt">Select a time:</label></b>
                                <input type="time" id="appt" name="appt">
                                </form>
                            </div>
                            


                            <div class="mb-3">
                                <form action="/action_page.php">
                                            <b><label for="date">First Date:</label></b>
                                            <input type="date" id="Datefirst" name="Date">
                                            <!-- <input type="submit"> -->

                            </div>

                            <div class="mb-3">
                                <form action="/action_page.php">
                                            <b><label for="date">Date Last:</label></b>
                                            <input type="date" id="Datelast" name="Date">
                                            <!-- <input type="submit"> -->

                                           
        <div class="main">
     
        <!-- <?php

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `tblcard` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?> -->
       <b> <label for="">Image:</label></b>
        <td><input type="file" name="image" value="<?php echo $data['Image'] ?>"><img src="<?php echo $data['Image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">

        </form>
    </div>
       

                            </div>

                            <!-- <div class= "row">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></spam>New</a>
                                <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></spam>Print</a>
                            </div> -->

                        
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
                               <button> <a href="student-view.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">save</a> </button>
                                <!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></spam>Print</a> -->
                            </div>

                            <div class="heigh10"></div>
                            <div class= "row">
                                <table class id="myTable" class="table table-bordered table-striped" >
                                <!-- <thead>
                                    <th>Id</th>
                                    <th>firstname</th>
                                    <th>Lastname</th>
                                    <th>date</th>
                                </thead> -->
                           
                                </table>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>