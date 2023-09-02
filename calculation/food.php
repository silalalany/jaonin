<?php include('server.php'); ?>

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
											<h1>คำนวณอาหารฟรี<br />
											กรอกข้อมูลเลย</h1>
											<p>สำหรับในเรื่องของปริมาณอาหารนั้นถือว่าเป็นอีกเรื่องหนึ่งที่สำคัญในการเลี้ยงปลานิล เนื่องจากเลี้ยงน้อยไปก็ไม่โตบ้างแตกไซร์บ้าง เลี้ยงมากไปก็กินไม่หมดบ้างน้ำเสียอีกเผลอๆปลาตายได้อีกด้วย ดังนั้นเรามาดูวิธีคิดกันดีกว่า</p>
										</header>
										<p>ปลาเล็กควรให้อาหารประมาณ 10-15% ของน้ำหนัก
										<br>ปลาขนาดวัยรุ่นควรให้ประมาณ 7-8% ของน้ำหนักตัว 
										<br>ปลาใหญ่อัตราการให้ประมาณ 3-4% ของน้ำหนักตัว</p>
									</div>
									<span class="image object">
										<img src="images/02.jpg" alt="คำนวณอาหารฟรี" />
									</span>
								</section>

							<!-- Form -->
							<h3>คำนวนเลย</h3>

							<form id="data" method="post" action="mysql.php" onsubmit="return validateForm()">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="weight_now" value="" placeholder="น้ำหนักปลาปัจจุบัน(กรัม)" /><p>เช่น ปลา1ขีดให้กรอก 100 </p>
									</div>
									<div class="col-12">
										<select name="meal" >
											<option value="">--- คุณให้อาหารปลากี่มื้อ ---</option>
											<option value="1">1 มื้อ</option>
											<option value="2">2 มื้อ</option>
											<option value="3">3 มื้อ</option>
											<option value="4">4 มื้อ</option>
										</select>
									</div>
									<div class="col-12">
										<select name="food" >
											<option value="">--- โปรตีนอาหารที่คุณใช้ ---</option>
											<option value="25-30">25-30</option>
											<option value="35-30">30-40</option>
										</select>
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="fish_amount" value="" placeholder="จำนวนปลาในบ่อของคุณ(ตัว)" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="size_pond" value="" placeholder="ขนาดบ่อของคุณ" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="day" value="" placeholder="เลี้ยงปลามากี่วันเเล้ว(ใส่เเต่ตัวเลข)" />
									</div>
									<!-- Break -->
									<div class="col-12">
										<select name="CITY" >
											<option value="">-- กรุณาระบุที่อยู่ของฟาร์มคุณ --</option>
											<option value="กระบี่">กระบี่</option>
											<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
											<option value="กาญจนบุรี">กาญจนบุรี</option>
											<option value="กาฬสินธุ์">กาฬสินธุ์</option>
											<option value="กำแพงเพชร">กำแพงเพชร</option>
											<option value="ขอนแก่น">ขอนแก่น</option>
											<option value="จันทบุรี">จันทบุรี</option>
											<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
											<option value="ชลบุรี">ชลบุรี</option>
											<option value="ชัยนาท">ชัยนาท</option>
											<option value="ชัยภูมิ">ชัยภูมิ</option>
											<option value="ชุมพร">ชุมพร</option>
											<option value="เชียงราย">เชียงราย</option>
											<option value="เชียงใหม่">เชียงใหม่</option>
											<option value="ตรัง">ตรัง</option>
											<option value="ตราด">ตราด</option>
											<option value="ตาก">ตาก</option>
											<option value="นครนายก">นครนายก</option>
											<option value="นครปฐม">นครปฐม</option>
											<option value="นครพนม">นครพนม</option>
											<option value="นครราชสีมา">นครราชสีมา</option>
											<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
											<option value="นครสวรรค์">นครสวรรค์</option>
											<option value="นนทบุรี">นนทบุรี</option>
											<option value="นราธิวาส">นราธิวาส</option>
											<option value="น่าน">น่าน</option>
											<option value="บึงกาฬ">บึงกาฬ</option>
											<option value="บุรีรัมย์">บุรีรัมย์</option>
											<option value="ปทุมธานี">ปทุมธานี</option>
											<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
											<option value="ปราจีนบุรี">ปราจีนบุรี</option>
											<option value="ปัตตานี">ปัตตานี</option>
											<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
											<option value="พะเยา">พะเยา</option>
											<option value="พังงา">พังงา</option>
											<option value="พัทลุง">พัทลุง</option>
											<option value="พิจิตร">พิจิตร</option>
											<option value="พิษณุโลก">พิษณุโลก</option>
											<option value="เพชรบุรี">เพชรบุรี</option>
											<option value="เพชรบูรณ์">เพชรบูรณ์</option>
											<option value="แพร่">แพร่</option>
											<option value="ภูเก็ต">ภูเก็ต</option>
											<option value="มหาสารคาม">มหาสารคาม</option>
											<option value="มุกดาหาร">มุกดาหาร</option>
											<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
											<option value="ยโสธร">ยโสธร</option>
											<option value="ยะลา">ยะลา</option>
											<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
											<option value="ระนอง">ระนอง</option>
											<option value="ระยอง">ระยอง</option>
											<option value="ราชบุรี">ราชบุรี</option>
											<option value="ลพบุรี">ลพบุรี</option>
											<option value="ลำปาง">ลำปาง</option>
											<option value="ลำพูน">ลำพูน</option>
											<option value="เลย">เลย</option>
											<option value="ศรีสะเกษ">ศรีสะเกษ</option>
											<option value="สกลนคร">สกลนคร</option>
											<option value="สงขลา">สงขลา</option>
											<option value="สตูล">สตูล</option>
											<option value="สมุทรปราการ">สมุทรปราการ</option>
											<option value="สมุทรสงคราม">สมุทรสงคราม</option>
											<option value="สมุทรสาคร">สมุทรสาคร</option>
											<option value="สระแก้ว">สระแก้ว</option>
											<option value="สระบุรี">สระบุรี</option>
											<option value="สิงห์บุรี">สิงห์บุรี</option>
											<option value="สุโขทัย">สุโขทัย</option>
											<option value="สุพรรณบุรี">สุพรรณบุรี</option>
											<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
											<option value="สุรินทร์">สุรินทร์</option>
											<option value="หนองคาย">หนองคาย</option>
											<option value="หนองบัวลำภู">หนองบัวลำภู</option>
											<option value="อ่างทอง">อ่างทอง</option>
											<option value="อำนาจเจริญ">อำนาจเจริญ</option>
											<option value="อุดรธานี">อุดรธานี</option>
											<option value="อุตรดิตถ์">อุตรดิตถ์</option>
											<option value="อุทัยธานี">อุทัยธานี</option>
											<option value="อุบลราชธานี">อุบลราชธานี</option>
										</select>
									</div>
									<!-- Break -->
									<div class="col-4 col-12-small">
										<input type="radio" id="soil" name="pond" value="บ่อดิน"  checked>
										<label for="soil">บ่อดิน</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="cement" name="pond" value="บ่อปูน" >
										<label for="cement">บ่อปูน</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="cage" name="pond" value="กระชัง" >
										<label for="cage">กระชัง</label>
									</div>
									<!-- Botton -->
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" name="reg_user" value="คำนวนเลย" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
									<p><br><br></p>
								</div>
							</form>
							

							
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
					var x=document.forms["data"]["weight_now"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก น้ำหนักปลาปัจจุบัน");
						return false;
					}
					var x=document.forms["data"]["weight_future"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก น้ำหนักปลาที่อยากได้");
						return false;
					}
					var x=document.forms["data"]["meal"].value;
					if (x==null || x=="")
					{
						alert("โปรดเลือก จำนวณมื้อที่คุณให้อาหาร");
						return false;
					}
					var x=document.forms["data"]["food"].value;
					if (x==null || x=="")
					{
						alert("โปรดเลือก อาหารที่คุณใช้เลี้ยง");
						return false;
					}
					var x=document.forms["data"]["fish_amount"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก จำนวนปลาในบ่อ");
						return false;
					}
					var x=document.forms["data"]["size_pond"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก ขนาดบ่อของคุณ");
						return false;
					}
					var x=document.forms["data"]["size_fish"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก ขนาดปลาของคุณ");
						return false;
					}
					var x=document.forms["data"]["day"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก เลี้ยงปลามากี่วันเเล้ว");
						return false;
					}
					var x=document.forms["data"]["CITY"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก เมืองของคุณ");
						return false;
					}
					
					
				}
		</script>

	</body>
</html>