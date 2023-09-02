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

	$result = $conn->query('SELECT name, lastname, phone, address, province, district, locality, postal FROM user ');

    while ($data = $result->fetch_row()) {
      if ($data[2] === $_SESSION['phone']) {
        $name = $data[0];
        $lastname = $data[1];
        $address = $data[3];
        $province = $data[4];
        $district = $data[5];
        $locality = $data[6];
        $postal = $data[7];
      }
    }
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
												<h1>สวัสดี <?php  echo $name;  ?> <?php  echo $lastname;  ?></h1>
													<div class="col-6 col-12-medium">
														<h2>ข้อมูลส่วนตัว</h2>
														<p>ที่อยู่  <?php  echo $address;  ?>
															<br>ตำบล <?php  echo $locality;  ?>
															<br>อำเภอ <?php  echo $district;  ?>
															<br>จังหวัด <?php  echo $province;  ?>
															<br>รหัสไปรษณี <?php  echo $postal;  ?>
														</p>
													</div>
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
									<a href="#" class="image"><img src="images/logopng.png" alt="เจ้านิล" /></a>
									<br>
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="https://jaonin.com/">หน้าเเรก</a></li>
									<li><a href="https://jaonin.com/blog/">ความรู้เกี่ยวกับปลา</a></li>
									<li><a href="https://jaonin.com/price/price.php">ราคาตลาดปลาวันนี้</a></li>
									<li><a href="https://jaonin.com/technology/">นวัตกรรมของเจ้านิล</a></li>
									<li><a href="https://jaonin.com/shop/">สินค้าของเจ้านิล</a></li>
									<li><a href="https://jaonin.com/calculation/">วิเคราะห์ปลาโดยเจ้านิล</a></li>
									<li><a href="https://jaonin.com/market/market.php">ตลาดซื้อขายออนไลน์</a></li>
									<li><a href="https://jaonin.com/map/map.php">เเผนที่เกี่ยวกับการเกษตร</a></li>
									<li>
										<span class="opener">สมาชิกเจ้านิล</span>
										<ul>
											<li><a href="https://jaonin.com/member/index.php">เข้าสู่ระบบ</a></li>
											<li><a href="https://jaonin.com/member/memberSingUp.php">สมัครสมาชิก</a></li>
										</ul>
									</li>
								</ul>
							</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>ติดตามเรา</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="https://www.facebook.com/JaoNin.official/" class="image"><img src="images/fb.jpg" alt="facebook jaonin" /></a>
											<p>facebook :  <a href="https://www.facebook.com/JaoNin.official/">JaoNin.official</a><br>youtube : เร็วๆนี้</p>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>ติดต่อ เจ้านิล</h2>
									</header>
									<ul class="contact">
										<li class="icon solid fa-envelope">jaonin.official@jaonin.com</li>
										<li class="icon solid fa-phone">(+66) 061 898 3722</li>
										<li class="icon solid fa-home">Thailand</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved.   <a href="https://jaonin.com/admin/">[ Admin ]</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Messenger ปลั๊กอินแชท Code -->
			<div id="fb-root"></div>

			<!-- Your ปลั๊กอินแชท code -->
			<div id="fb-customer-chat" class="fb-customerchat">
			</div>

			<script>
			var chatbox = document.getElementById('fb-customer-chat');
			chatbox.setAttribute("page_id", "108553988158117");
			chatbox.setAttribute("attribution", "biz_inbox");

			window.fbAsyncInit = function() {
				FB.init({
				xfbml            : true,
				version          : 'v11.0'
				});
			};

			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>