<?php include('server.php'); 
session_start();
$ans = $_SESSION['ans'];
$ans2 = $_SESSION['ans2'];
$p = $_SESSION['p'] * 100;
$m = $_SESSION['m'];
$d = $_SESSION['d'] * 100;

$th = "กรัม";
$th2 = "กรัม";
if ($ans > 999) {
	$th = "กิโลกรัม";
	$ans = $_SESSION['ans'] / 1000;
}
if ($ans2 > 999) {
	$th2 = "กิโลกรัม";
	$ans2 = $_SESSION['ans2'] / 1000;
}
?>

<!DOCTYPE HTML>
<!--
	JaoNin by Silany
	FB : Silany Buranarom
-->
<html>
	<head>
		<link rel="icon" type="" href="images/logopng.png" />
		<title>JaoNin เจ้านิล</title>
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
							
							

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>ปลานิล</strong> by JaoNin</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>คำนวณอาหารสำเร็จ<br />
											อ่านคำเเนะนำเลย</h1>
											<p>สำหรับในเรื่องของปริมาณอาหารนั้นถือว่าเป็นอีกเรื่องหนึ่งที่สำคัญในการเลี้ยงปลานิล เนื่องจากเลี้ยงน้อยไปก็ไม่โตบ้างแตกไซร์บ้าง เลี้ยงมากไปก็กินไม่หมดบ้างน้ำเสียอีกเผลอๆปลาตายได้อีกด้วย ดังนั้นสรุปได้ว่า</p>
										</header></div>
									<span class="image object">
										<img src="images/02.jpg" alt="คำนวณอาหารฟรี" />
									</span>
								</section>
							
							
								<!-- Content -->
								
									<div class="row">
										<div class="col-6 col-12-small">
											<h4>คำนวนตามข้อมูลของคุณ</h4>
											<blockquote>คุณเลี้ยงปลานิลมา <?php echo $_SESSION['day']; ?> วันเเล้ว ใน<?php echo $_SESSION['pond']; ?>ของคุณมีปลาจำนวน <?php echo $_SESSION['fish_amount']; ?> ตัว เเต่ละตัวของคุณมีน้ำหนักประมาณ <?php echo $_SESSION['weight_now']; ?> กรัม ปลาของคุณกินอาหารที่มีโปรตีน <?php echo $_SESSION['food']; ?> เป็นจำนวน <?php echo $_SESSION['meal']; ?> มื้อต่อ 1 วัน ดังนั้นปลาทั้งหมดของคุณควรกินอาหารเม็ดรวมเเล้ว <b>จำนวน <?php echo $ans2; ?> <?php echo $th2; ?>ต่อ 1 มื้อของคุณ</b></blockquote>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-6 col-12-small">
											<h4>คำเเนะนำในการให้อาหารจากเรา</h4>
											<blockquote>ปลาของคุณเเต่ละตัวมีน้ำหนัก <?php echo $_SESSION['weight_now']; ?> กรัม ควรกินอาหาร <?php echo $p; ?> % ของน้ำหนักตัว โปรตีนอาหารควรเป็น <?php echo $_SESSION['food']; ?> <b>ควรกิน <?php echo $m; ?> มื้อต่อวัน</b>  เมื่อคำนวนเเล้วสรุปได้ว่า ปลาทั้งหมดของคุณควรกินอาหารเม็ดรวมเเล้ว <b>จำนวน <?php echo $ans; ?> <?php echo $th; ?>ต่อมื้อ</b></blockquote>
										</div>
									</div>
								

								<p>หากไม่เเน่ใจ สงใสตรงไหนหรืออยากสอบถาม ติดต่อเราได้ที่ เพจเฟสบุ้ค <a href="https://www.facebook.com/JaoNin.official/">JaoNin.official</a> เราพร้อมช่วยคุณเสมอ</p>
								<br><br><br>
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