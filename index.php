<?php

	include'koneksi.php';
	$tgl=date('Y-m-d');
	session_start();
	if(isset($_SESSION['nm_admin'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>SiPerpusApp | Dashboard</title>

	<!-- Favicons -->
	<link href="https://preview.redd.it/ncvcfof1yqd71.png?width=1107&format=png&auto=webp&s=e3bcd8df6f835df5365654ebd84a1fa718d9052a" rel="icon">
	<link href="https://preview.redd.it/ncvcfof1yqd71.png?width=1107&format=png&auto=webp&s=e3bcd8df6f835df5365654ebd84a1fa718d9052ama.png" rel="touch-icon">

	<!-- Vendor -->
	<link rel="stylesheet" href="vendor/bootstrap-5/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/all.css">

    <!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-primary">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">
	    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/LOGO-PERPUSNAS.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	    <span class="menu-collapsed">SiPerpusApp</span>
	  </a>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      
	      <li class="nav-item dropdown d-sm-block d-md-none">
	        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Menu
	        </a>
	        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
	            <a class="dropdown-item" href="#">Dashboard</a>
	            <a class="dropdown-item" href="#">Profile</a>
	        </div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>

	<div class="row" id="body-row">
	    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
	        <ul class="list-group">
	            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
	                <small>MAIN MENU</small>
	            </li>
	            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
	                <div class="d-flex w-100 justify-content-start align-items-center">
	                    <span class="fa fa-home fa-fw mr-3 "></span>
	                    <span class="menu-collapsed">Dashboard</span>
	                    <span class="submenu-icon ml-auto"></span>
	                </div>
	            </a>
	            <div id='submenu1' class="collapse sidebar-submenu">
	                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
	                    <span class="menu-collapsed">Charts</span>
	                </a>
	                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
	                    <span class="menu-collapsed">Reports</span>
	                </a>
	                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
	                    <span class="menu-collapsed">Tables</span>
	                </a>
	            </div>
	            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
	                <div class="d-flex w-100 justify-content-start align-items-center">
	                    <span class="fa fa-user fa-fw mr-3"></span>
	                    <span class="menu-collapsed">Profile</span>
	                    <span class="submenu-icon ml-auto"></span>
	                </div>
	            </a>
	            <div id='submenu2' class="collapse sidebar-submenu">
	                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
	                    <span class="menu-collapsed">Settings</span>
	                </a>
	                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
	                    <span class="menu-collapsed">Password</span>
	                </a>
	            </div>            
	           
	        </ul>
	    </div> <!-- End Sidebar -->

	    <!-- MAIN -->
	    <div class="col">
	        
	        <h1>
	            DUMET School
	        </h1>

	    </div>
	</div>
	<script src="vendor/bootstrap-5/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="vendor/fontawesome/js/all.js" type="text/javascript"></script>
	<script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
</body>
</html>
<?php
}
else {
	echo "<script>alert('Anda Harus Login Dahulu!');</script>";
	header('location:login.php');
}
?>