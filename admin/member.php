<?php session_start(); ?>
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
										<header>
											<h1>Admin login</h1>
											<?php if (isset($_SESSION['error'])) : ?>
												<?php 
													echo $_SESSION['error'];
													unset($_SESSION['error']);
												?>
											<?php endif ?>
											<p>กรอกรหัสผ่านเพื่อเข้าสู่ระบบ</p>
										</header>
										
										<!-- Form -->
										<form id="data" method="post" action="login_db.php" onsubmit="return validateForm()">
											
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="phone" value="" placeholder="user" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="password" value="" placeholder="password" />
												</div>
												
												<!-- Break -->
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="login_user" value="เข้าสู่ระบบ" class="primary" /></li>
													</ul>
												</div>
												
											</div>
										</form>
										
										<p>เเจ้งปัญหากับ <a href="https://www.facebook.com/SilanyBuranarom">Dev</a></p>




									</div>
									<span class="image object">
										<img src="images/picapp.jpg" alt="เจ้านิล" />
									</span>
								</section>
								<br><br>
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

							

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved.</p>
								</footer>

						</div>
					</div>

			</div>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script>
				function validateForm()
					{
						var x=document.forms["data"]["phone"].value;
						if (x==null || x=="")
						{
							alert("โปรดกรอก user");
							return false;
						}
						var x=document.forms["data"]["password"].value;
						if (x==null || x=="" || x=="0")
						{
							alert("โปรดกรอก รหัสผ่านให้ถูกต้อง ");
							return false;
						}
					}
			</script>

	</body>
</html>