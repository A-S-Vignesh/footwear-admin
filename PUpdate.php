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
    <title>Profile Edit</title>
</head>
<body>
    <br> <br> <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PROFILE UPDATE
                            <a href="Profile.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $un=$_SESSION['name'];
                            $query = "SELECT * FROM user WHERE Username='$un' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action=" "method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['Username']; ?>">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?=$user['Username'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$user['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$user['PhoneNumber'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?=$user['Password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <input type="submit" class="btn btn-success" name="pupdate" value="UPDATE">
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
{
    @include("db.php");
    if(isset($_POST['pupdate']))
    {
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $sql="UPDATE `user` SET `Username`='$name',`Email`='$email',`PhoneNumber`='$phone',`Password`='$password' WHERE Username='$user_id'";
        $res=$conn->query($sql);
        if($res)
        {
            echo "<script> window.location.href='Profile.php';
            alert('Your Data Updated Successfully');</script>";
        }
        else
        {
            echo "<script> window.location.href='Profile.php';
            alert('Your Data Not Updated');</script>";
        }
    }
}
?>