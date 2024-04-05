<!doctype html>
<html lang="en">
  <head>
    <title> delete trainer </title>
    <style>
        body{
             background-color: rgb(219, 66, 196);
        }
    </style>
</head>
<body>
</body>
</html>
<?php
    if(isset($_GET['id']))
    {
            @include("db.php");
            $id=$_GET['id'];
            $sql="DELETE from trainer WHERE plan='$id'";
            $result=mysqli_query($conn, $sql);
            if($result)
            {
                
                echo " <script>
                window.location.href='Trainers.php';
                alert('Trainer Data Deleted Successfully') </script>";
            }
            else{
                echo "  <script>
                window.location.href='Trainers.php';
                 alert('Trainer Data Doesn't Deleted') </script>";
            }
    }
?>