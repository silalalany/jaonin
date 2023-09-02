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

					<script>
						function initMap() {
						const jaonin = { lat: 13.645209, lng: 100.495123 };
						const map = new google.maps.Map(document.getElementById("map"), {
							zoom: 4,
							center: jaonin,
							mapTypeControl: false,
						});
						const contentString =
							'<div id="content">' +
							'<div id="siteNotice">' +
							"</div>" +
							'<h1 id="firstHeading" class="firstHeading">เจ้านิล</h1>' +
							'<div id="bodyContent">' +
							"<p><b>jaonin</b>, หรือ <b>เจ้านิล</b>, เป็นบริการทางการเกษตรที่รวบรวมความรู้เเละข้อมูลของการประมงน้ำจืด" +
							"เพื่อนำพาเกษตรกรไทยสู่สมาทฟาร์ม ด้วยการเกษตรดิจิทัล เครื่องจักรกลเกษตร หุ่นยนต์ โดรนและระบบอัตโนมัติ เทคโนโลยีชีวภาพทางการเกษตร การจัดการฟาร์มรูปแบบใหม่ การจัดการหลังการเก็บเกี่ยวและขนส่ง ฯลฯ รวมถึงบริการแพลตฟอร์มขายผลผลิตการเกษตรออนไลน์ ช่วยให้เกษตรกรสามารถเข้าถึงผู้บริโภคโดยไม่ต้องผ่านพ่อค้าคนกลาง แก้ปัญหาการกดราคาผลผลิต และช่วยเชื่อมโยงเกษตรกร กับผู้บริโภค โรงงานอุตสาหกรรม หรือร้านอาหาร และให้พวกเขาสามารถค้าขายได้อย่างต่อเนื่อง" +
							".</p>" +
							'<p>ติดต่อเเละติดตามเราได้ที่ , <a href="https://www.facebook.com/JaoNin.official/">' +
							"FB JaoNin.official</a> " +
							".</p>" +
							"</div>" +
							"</div>";
						const infowindow = new google.maps.InfoWindow({
							content: contentString,
						});
						const marker = new google.maps.Marker({
							position: jaonin,
							map,
							title: "jaonin (Ayers Rock)",
						});

						marker.addListener("click", () => {
							infowindow.open({
							anchor: marker,
							map,
							shouldFocus: false,
							});
						});
						}
							
						
					</script>

					<div id="main">
						<div id="map" style="width:100%;height:100%;display:block;">
							
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

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfofWAfFl3NtkzK6brk1tCJJKrX9PQMKs&callback=initMap&libraries=&v=weekly"async> </script>

	</body>
</html>