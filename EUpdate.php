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
    <title>Event Update</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>EVENT UPDATE 
                            <a href="Events.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM `event` WHERE Num='$user_id'";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="event_no" value="<?= $user['Num']; ?>">
                                    <div class="mb-3">
                                        <label>Event No.</label>
                                        <input type="text" name="eno" value="<?=$user['Num'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input type="text" name="edate" value="<?=$user['Date'];?>" class="form-control" placeholder="yyyy-mm-dd">
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <input type="text" name="etime" value="<?=$user['Time'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" name="ecategory" value="<?=$user['Category'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Venue</label>
                                        <input type="text" name="evenue" value="<?=$user['Venue'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Organizer</label>
                                        <input type="text" name="eorg" value="<?=$user['Organizer'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <input type="submit" class="brn btn-success" name="eupdate" value="UPDATE">
                                        </input>
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
<?php
  @include("db.php");
  if(isset($_POST['eupdate']))
  {
      $user_id=$_POST['event_no'];
      $n=$_POST['eno'];
      $d=$_POST['edate'];
      $t=$_POST['etime'];
      $cat=$_POST['ecategory'];
      $ven=$_POST['evenue'];
      $org=$_POST['eorg'];
      $sql="UPDATE `event` SET `Num`='$n',`Date`='$d',`Time`='$t',`Category`='$cat',`Venue`='$ven',`Organizer`='$org' WHERE Num='$user_id'";
      $res=$conn->query($sql);
      if($res)
      {
          echo "<script> window.location.href='Events.php';
          alert('Event Data Updated Successfully');</script>";
      }
      else
      {
          echo "<script> window.location.href='Events.php';
          alert('Event Data Not Updated');</script>";
      }
  }
?>