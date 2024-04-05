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
    <link rel="stylesheet" href="Admin.css">
    <title>Member Edit</title>
</head>
<body>
    <br> <br> <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Updating Product 
                            <a href="men.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $product_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM product WHERE product_code='$product_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="prod_id" value="<?= $user['id']; ?>">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?=$user['product_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="number" name="price" value="<?=$user['product_price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="number" name="qty" value="<?=$user['product_qty'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input type="text" name="img" value="<?=$user['product_image'];?>" class="form-control">
                                        <input type="hidden" name="code" value="<?= $user['product_code']; ?>">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center">
                                        <input type="submit" class="btn btn-success" name="update" value="UPDATE">
                                        </input>
                                    </div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Product Found</h4>";
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
if(isset($_POST['update']))
{
    @include("db.php");
    $id=$_POST['prod_id'];
    $product_code=$_POST['code'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['qty'];
    $image=$_POST['img'];
    $sql="UPDATE 'product' SET 'id'='$id','product_name'='$name',`product_price`='$price',`product_qty`='$quantity',`product_image`='$image' WHERE product_code='$product_code'";
    $res=$conn->query($sql);
    if($res)
    {
        echo "<script> 
        alert('User Data Updated Successfully');</script>";
    }
    else
    {
        echo "<script> 
        alert('User Data Not Updated');</script>";
    }
}
?>