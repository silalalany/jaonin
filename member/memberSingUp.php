<?php include('server.php'); 
	session_start();
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
										<header>
											<h1>สมัครสมาชิกเจ้านิล</h1>
											<p>สมัครเลย เพื่อรับสิทธิ์พิเศษเหล่านี้จากเจ้านิล</p>
											<p>✅ลงประกาศซื้อปลา
											<br>✅ลงประกาศขายปลา
											<br>✅บริการวิเคราะห์ปลา
											<br>✅บริการคำนวนอาหารปลา
											<br>✅บริการวางเเผนการเลี้ยง
											<br>✅บริการวิเคราะห์ยอดรวม
											<br>✅บริการคำนวนคุณภาพน้ำ</p>
										</header>
									</div>
									<span class="image object">
										<img src="images/picapp.jpg" alt="เจ้านิล" />
									</span>
								</section>

								<!-- Form -->
								<h2>กรอกข้อมูลเลย</h2>
								<form id="data" method="post" action="register_db.php" onsubmit="return validateForm()">
									<!-- <?php include('errors.php'); ?> -->
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											ชื่อ(name)
											<input type="text" name="name" value="" placeholder="" />
										</div>
										<div class="col-6 col-12-xsmall">
											นามสกุล(lastname)
											<input type="text" name="lastname" value="" placeholder="" />
										</div>
										<div class="col-6 col-12-xsmall">
											เบอร์โทรศัพท์(phone)
											<input type="text" name="phone" value="" placeholder="0xxxxxxxxx" />
										</div>
										<div class="col-6 col-12-xsmall">
											รหัสผ่าน(password)
											<input type="text" name="password_1" value="" placeholder="" />
										</div>
										<div class="col-6 col-12-xsmall">
											ยืนยันรหัสผ่าน(confrom password)
											<input type="text" name="password_2" value="" placeholder="กรอกรหัสให้เหมือนด้านบน" />
										</div>
										<div class="col-6 col-12-xsmall">
											ที่อยู่(address)
											<input type="text" name="address" value="" placeholder="บ้านเลขที่ xx ถนน xx" />
										</div>
										<div class="col-12">
											จังหวัด(province)
											<select name="province" >
												<option value="">-- เลือก --</option>
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
										<div class="col-6 col-12-xsmall">
											อำเภอ(district)
											<input type="text" name="district"value="" placeholder="" />
										</div>
										<div class="col-6 col-12-xsmall">
											ตำบล(locality)
											<input type="text" name="locality" value="" placeholder="" />
										</div>
										<div class="col-6 col-12-xsmall">
											รหัสไปรษณี(postal)
											<input type="text" name="postal" value="" placeholder="00000" />
										</div>
										
										<div class="col-6 col-12-xsmall">
											<br><br>
											เลือกตำเเหน่งในเเผนที่เลย
											<label for="lat"></label>
											<input type="text" name="lat" id="lat" placeholder="ละติจูด(เมื่อเลือกในเเผนที่เเล้วจะขึ้นอัตโนมัติ)">
											<label for="Lng"></label>
											<input type="text" name="lng" id="lng" placeholder="ลองจิจูด(เมื่อเลือกในเเผนที่เเล้วจะขึ้นอัตโนมัติ)">
										</div>
										
										
										<div class="col-6 col-12-xsmall">
											<div id="map_canvas" style="width: 310px;;height: 310px;;" > </div>
										</div>

										<!-- Break -->
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" name="reg_user" value="สมัคร" class="primary" /></li>
											</ul>
										</div>
										
									</div>
								</form>

								<!-- Map -->
								<script language="JavaScript">

									function initMap() { 
										var myOptions = {
										zoom: 5,
										center: new google.maps.LatLng(13.340458, 100.461531),
										mapTypeControl: false,
										};

										var map = new google.maps.Map(document.getElementById('map_canvas'),
											myOptions);


										var marker = new  google.maps.Marker({
											map:map,
											position: new google.maps.LatLng(13.340458, 100.461531),
											draggalbe:true

										});

										var infowindow = new google.maps.InfoWindow({
											map:map,
											content:"เลือกตำเเหน่งของคุณ",
											position: new google.maps.LatLng(13.340458, 100.461531)

										});

										google.maps.event.addListener(map,'click',function(event){
											infowindow.open(map,marker);
											infowindow.setContent("เลือกตำเเหน่งของคุณ");
											infowindow.setPosition(event.latLng);
											marker.setPosition(event.latLng);

											$("#lat").val(event.latLng.lat());
											$("#lng").val(event.latLng.lng());

											
										});	
										
									}


									function saveLocation(){
									var location_name  = $("#location_name").val();
									var lat  = $("#lat").val();
									var lng  = $("#lng").val();
									var location_type  = $("#location_type option:selected").val();

									$.ajax({
									method:"POST",
									data:{ location_name:location_name,lat:lat,lng:lng,location_type:location_type   }
									}).done(function(){
									alert("OK");
									});

									}
									

								</script>
								
								
								
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
					var x=document.forms["data"]["name"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก ชื่อ");
						return false;
					}
					var x=document.forms["data"]["lastname"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก นามสกุล");
						return false;
					}
					var x=document.forms["data"]["phone"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก เบอร์โทรศัพท์");
						return false;
					}
					var x=document.forms["data"]["password_1"].value;
					if (x==null || x=="")
					{
						alert("โปรดตั้งรหัสผ่าน ");
						return false;
					}
					var y=document.forms["data"]["password_2"].value;
					if (x!=y || x=="" || x==null)
					{
						alert("กรอก ยืนยันรหัสผ่านให้ถูกต้อง ");
						return false;
					}
					var x=document.forms["data"]["address"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก ที่อยู่");
						return false;
					}
					var x=document.forms["data"]["province"].value;
					if (x==null || x=="")
					{
						alert("โปรดเลือก จังหวัด");
						return false;
					}
					var x=document.forms["data"]["district"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก อำเภอ");
						return false;
					}
					var x=document.forms["data"]["locality"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก ตำบล");
						return false;
					}
					var x=document.forms["data"]["postal"].value;
					if (x==null || x=="")
					{
						alert("โปรดกรอก รหัสไปรษณี");
						return false;
					}
					
					
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfofWAfFl3NtkzK6brk1tCJJKrX9PQMKs&callback=initMap&libraries=&v=weekly"async> </script>
	</body>
</html>