<!doctype html>
<html lang="en">
  <head>
    <title> delete user </title>
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
            $sql="DELETE from user WHERE Username='$id'";
            $result=mysqli_query($conn, $sql);
            if($result)
            {
                
                echo " <script>
                window.location.href='members.php';
                 alert('User Data Deleted Successfully') </script>";
            }
            else{
                echo "  <script>
                window.location.href='members.php';
                 alert('User Data Doesn't Deleted') </script>";
            }
    }
?>