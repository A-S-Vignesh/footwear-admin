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
                <a href="Admin.php" onclick="activateLink(this)" class="list-group-item list-group-item-action bg-purple second-text active">
                    <i class="fa-solid fa-clipboard-list me-2"> </i>  DASHBOARD
                </a>
                <a href="men.php" onclick="activateLink(this)" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-user me-2"> </i> Men
                </a>
                <a href="women.php" onclick="activateLink(this)" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-person-dress me-2"> </i> Women
                </a>
                <a href="kids.php" onclick="activateLink(this)" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-child me-2"> </i> Kids
                </a>
                <a href="orders.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-cart-shopping me-2"> </i> Orders
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
                <h2 class="fs-2 m-0"> Dashboard </h2>
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
        <!-- Nav ends  -->
        <script>
            function activateLink(link) {
            // Remove the active class from all links
            const links = document.getElementsByTagName('a');
            for (let i = 0; i < links.length; i++) {
                links[i].classList.remove('active');
            }
            // Add the active class to the clicked link
            link.classList.add('active');
        }
        </script>