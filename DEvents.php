<!doctype html>
<html lang="en">
  <head>
    <title> delete event </title>
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
            $sql="DELETE from event WHERE Num='$id'";
            $result=mysqli_query($conn, $sql);
            if($result)
            {
                
                echo " <script>
                window.location.href='Events.php';
                alert('Event Data Deleted Successfully') </script>";
            }
            else{
                echo "  <script>
                window.location.href='members.php';
                 alert('Event Data Doesn't Deleted') </script>";
            }
    }
?>