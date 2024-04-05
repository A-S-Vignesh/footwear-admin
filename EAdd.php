<?php
session_start();
require 'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <title>Event Add</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> ADD EVENT 
                            <a href="Events.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                                    <div class="mb-3">
                                        <label>Event No.</label>
                                        <input type="text" name="eno"  class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input type="text" name="edate"  class="form-control" placeholder="yyyy-mm-dd" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <input type="text" name="etime"  class="form-control" placeholder="hh:mm _._" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" name="ecategory" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Venue</label>
                                        <input type="text" name="evenue" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Organizer</label>
                                        <input type="text" name="eorg" class="form-control" required>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <input type="submit" class="btn btn-success" name="eadd" value="ADD">
                                        </input>
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
<?php  
    @include("db.php");
    if(isset($_POST['eadd']))
    {
        $no=$_POST['eno'];
        $date=$_POST['edate'];
        $time=$_POST['etime'];
        $venue=$_POST['evenue'];
        $category=$_POST['ecategory'];
        $org=$_POST['eorg'];
        $sql = "INSERT INTO event VALUES('$no','$date','$time','$category','$venue','$org')";
        $result=$conn->query($sql);
        if($result==TRUE)
        {
            echo '<script> alert("Event Data Added Successful")
                window.location.href="Events.php";</script>';
        }
        else{
            echo '<script> alert("Event Data Not Added")
                window.location.href="Events.php"; </script>';
        }
    }
?>