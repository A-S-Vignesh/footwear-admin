<?php
    if(isset($_GET['id']))
    {
            @include("db.php");
            $id=$_GET['id'];
            $sql="DELETE from pay_details WHERE Plan='$id'";
            $result=mysqli_query($conn, $sql);
            if($result)
            {
                echo " <script>
                window.location.href='Payments.php';
                 alert('User Data Deleted Successfully') </script>";
            }
            else{
                echo "  <script>
                window.location.href='Payments.php';
                 alert('User Data Doesn't Deleted') </script>";
            }
    }
?>