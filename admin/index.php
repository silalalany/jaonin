<?php 
	include('server.php');
	session_start();
	if (!isset($_SESSION['phone'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: member.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['phone']);
		header('location: member.php');
	}

	
    $conn = mysqli_connect($servername, $username, $password, $dbname);

	
?>

<!DOCTYPE HTML>
<!--
	jaonin
-->
<html>
	<head>
		<link rel="icon" type="" href="images/logopng.png" />
		<title>เจ้านิล jaonin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="is-preload">
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						
							
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<!-- เเสดง $_SESSION['success'] -->
										<?php if (isset($_SESSION['success'])) : ?>
											<?php 
												echo $_SESSION['success'];
												unset($_SESSION['success']);
											?>
										<?php endif ?>

										<!-- login -->
										<?php if (isset($_SESSION['phone'])) : ?>
											<header>
												<h1>สวัสดี <?php  echo $_SESSION['phone'];  ?> </h1>
												<p><a href="index.php?logout='1'" style="color: red;">ออกจากระบบ</a></p>
											</header>
										<?php endif ?>

									

									</div>
									<span class="image object">
										<img src="images/picapp.jpg" alt="เจ้านิล" />
									</span>
								</section>

								
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">


							<!-- Menu -->
							<nav id="menu">
								<header class="major">
									<a href="https://jaonin.com/" class="image"><img src="images/logopng.png" alt="เจ้านิล" /></a>
									<br>
									<h2>Menu</h2>
								</header>
								
							</nav>

							<!-- Section -->
								

							

						</div>
					</div>

			</div>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>