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
											<h1>เข้าสู่ระบบสมาชิกเจ้านิล</h1>
											<?php if (isset($_SESSION['error'])) : ?>
												<?php 
													echo $_SESSION['error'];
													unset($_SESSION['error']);
												?>
											<?php endif ?>
											<p>กรอกเบอร์เเละรหัสผ่านเพื่อเข้าสู่ระบบ</p>
										</header>
										
										<!-- Form -->
										<form id="data" method="post" action="login_db.php" onsubmit="return validateForm()">
											
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="phone" value="" placeholder="เบอร์โทรศัพท์" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="password" value="" placeholder="รหัสผ่าน" />
												</div>
												
												<!-- Break -->
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="login_user" value="เข้าสู่ระบบ" class="primary" /></li>
													</ul>
												</div>
												
											</div>
										</form>
										
										<p>คุณลืมรหัสผ่านใช่ไหม <a href="newpassword.php">ขอรหัสผ่านใหม่</a></p>
										<p>คุณยังไม่ได้เป็นสมาชิกใช่ไหม <a href="memberSingUp.php">สมัครสมาชิกเลย</a></p>




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

			<script>
				function validateForm()
					{
						var x=document.forms["data"]["phone"].value;
						if (x==null || x=="")
						{
							alert("โปรดกรอก เบอร์");
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