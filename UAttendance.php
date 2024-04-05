<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Bullet Gym User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="User.css">
</head>
<body>
	<div class="d-flex" id="wrapper">
	
	<!-- Slidebar start -->
		<div class="bg-white" id="sidebar-wrapper">
			<div class="slidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
				<i class="logo"> <img src="logo.png"> </i> Bullet Gym
			</div>
            <div class="list-group list-group-flush my-3">
                <a href="User.php" class="list-group-item list-group-item-action  second-text">
                    <i class="fa-solid fa-clipboard-list me-2"> </i>  DASHBOARD
                </a>
                <a href="Profile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-user me-2"> </i> Profile
                </a>
                <a href="UAttendance.php" class="list-group-item list-group-item-action  second-text fw-bold active">
                    <i class="fa-solid fa-calendar-days me-2"> </i> Attendance
                </a>
                <a href="UEvents.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-dumbbell me-2"> </i> Events
                </a>
                <a href="Home.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fa-solid fa-right-from-bracket me-2"> </i> Logout
                </a>
            </div>
		</div>
	<!-- Slidebar end -->
        <div id="page-content-wrapper">
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
                            <i class="fas fa-user me-2"></i> <?php echo($_SESSION['name']); ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a href="Profile.php" class="dropdown-item"> Profile </a></li>
                            <li> <a href="Home.html" class="dropdown-item"> Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row my-5 m-2">
                <h3 class="fs-4 mb-3 text-center"> Attendance Report </h3>
                <div class="col-md-12">
                    <table id="user-table" class="table table-bordered table-hover align-items-center text-center bg-light rounded shadow-sm table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Date </th>
                                <th scope="col"> Present/Absent </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            @include("db.php");
                            $id=$_SESSION['name'];
                            $sql="SELECT Date,attendance_ from attendance WHERE Username='$id'";
                            $res=$conn->query($sql);
                            while($row=$res->fetch_assoc())
                            {
                            echo '<tr>';
                            echo ' <td> '.$row['Date'].' </td>'; 
                            echo ' <td> '.$row['attendance_'].' </td>';   
                            echo '</tr>';
                         }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
	</div>
    <script>
        var el=document.getElementById("wrapper");
        var toggbtn = document.getElementById("menu-toggle");
        toggbtn.onclick = function(){
            el.classList.toggle("toggled");
        }
    </script>
</body>
</html>