<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Admin for Lolo footwear shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="Admin.css">
</head>
<body>
    <!-- Wrapper starts -->
	<div class="d-flex" id="wrapper">
	<!-- Slidebar start -->
		<div class="bg-white" id="sidebar-wrapper">
			<div class="slidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
				<i class="logo"> <img src="images/Logonew.png"> </i> Lolo
			</div>
            <div class="list-group list-group-flush my-3">
                <a href="Admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-clipboard-list me-2"> </i>  Dashboard
                </a>
                <a href="men.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                    <i class="fa-solid fa-user me-2"> </i> Men
                </a>
                <a href="women.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-person-dress me-2"> </i> Women
                </a>
                <a href="kids.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-child me-2"> </i> Kids
                </a>
                <a href="orders.php" class="list-group-item list-group-item-action bg-purple second-text active">
                    <i class="fa-solid fa-cart-shopping me-2"> </i> ORDERS
                </a>
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fa-solid fa-right-from-bracket me-2"> </i> Logout
                </a>
            </div>
		</div>
	<!-- Slidebar end -->
    <!-- Page-Content starts -->
    <div id="page-content-wrapper">
        <!-- Nav starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0"> Orders </h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"> </i> Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <li> <a href="index.php" class="dropdown-item"> Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Container starts -->
        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div class="active">
                            <h3 class="fs-2"> <?php
                            @include('db.php');
                            $sql=" SELECT * from product";
                            $res=$conn->query($sql);
                            if($tot = mysqli_num_rows($res))
                            {
                                echo " $tot ";
                            }
                            else{
                                echo " 0 ";
                            }
                            ?> </h3>
                            <p class="fs-5"> Men </p>
                        </div>
                        <i class="fa-solid fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"> <?php
                            @include('db.php');
                            $sql=" SELECT * from women";
                            $res=$conn->query($sql);
                            if($tot = mysqli_num_rows($res))
                            {
                                echo " $tot ";
                            }
                            else{
                                echo " 0 ";
                            }
                            ?> </h3>
                            <p class="fs-5"> Women </p>
                        </div>
                        <i class="fa-solid fa-person-dress fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"> <?php
                            @include('db.php');
                            $sql=" SELECT * from kids";
                            $res=$conn->query($sql);
                            if($tot = mysqli_num_rows($res))
                            {
                                echo " $tot ";
                            }
                            else{
                                echo " 0 ";
                            }
                            ?> </h3>
                            <p class="fs-5"> Kids </p>
                        </div>
                        <i class="fa-solid fa-child fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container ends -->
        <div class="row my-5 m-2">
                <h3 class="fs-4 mb-3 text-center"> Order details </h3>
                <div class="col">
                    <table id="user-table" class="table table-bordered table-hover align-items-center text-center bg-light rounded shadow-sm table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Id </th>
                                <th scope="col"> User name </th>
                                <th scope="col"> Email </th>
                                <th scope="col"> Phone no </th>
                                <th scope="col"> Address </th>
                                <th scope="col"> delivery mode </th>
                                <th scope="col"> Products </th>
                                <th scope="col"> Amount </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            @include("db.php");
                            $sql="SELECT * from orders";
                            $res=$conn->query($sql);
                            while($row=$res->fetch_assoc()){ ?>
                            <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['phone']; ?> </td>
                            <td> <?php echo $row['address']; ?> </td>
                            <td> <?php echo $row['pmode']; ?> </td>
                            <td> <?php echo $row['products']; ?> </td>
                            <td> <?php echo $row['amount_paid']; ?> </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <!-- Page-Content ends -->
    </div>
    <!-- Wrapper ends -->
    <script>
        var el=document.getElementById("wrapper");
        var toggbtn = document.getElementById("menu-toggle");
        toggbtn.onclick = function(){
            el.classList.toggle("toggled");
        }
    </script>
</body>
</html>