<?php
	session_start();

	$servername = "localhost";
    $username = "u857186656_data_food";
    $password = "JaoNin123";
    $dbname = "u857186656_data_food";
	//$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "price";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //if (!$conn) {
    //    die("Connection failed" . mysqli_connect_error());
    //}
    //else {
    //    echo "Connection successfully";
    //}
	date_default_timezone_set('Asia/Bangkok');
	$dnow = date('Y-m-d');

	$result = $conn->query('SELECT day, Slow, Shigh, Mlow, Mhigh, Llow, Lhigh FROM data_price ');

    while ($data = $result->fetch_row()) {
      if ($data[0] === $dnow) {
        $day = $data[0];
        $Slow = $data[1];
        $Shigh = $data[2];
        $Mlow = $data[3];
        $Mhigh = $data[4];
        $Llow = $data[5];
        $Lhigh = $data[6];
      }
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
									<a href="index.html" class="logo"><strong>Price</strong> ราคาปลานิล</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

                            <br><br>

								<!-- section -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>ราคาปลานิลวันนี้</h1>
											<p>ราคาปลานิลประจำวันที่ <?php echo date('d/m/Y'); ?></p>
											<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>ขนาด</th>
												<th>ราคา ต่ำสุด-สูงสุด ต่อกิโลกรัม</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>ปลานิล เบอร์ใหญ่</td>
												<td><?php echo $Llow; ?>-<?php echo $Lhigh; ?> บาท</td>
											</tr>
											<tr>
												<td>ปลานิล เบอร์กลาง</td>
												<td><?php echo $Mlow; ?>-<?php echo $Mhigh; ?> บาท</td>
											</tr>
											<tr>
												<td>ปลานิล เบอร์เล็ก</td>
												<td><?php echo $Slow; ?>-<?php echo $Shigh; ?> บาท</td>
											</tr>
										</tbody>
										
									</table>
								</div>
										</header>
									</div>
									<span class="image object">
										<img src="images/03.jpg" alt="app jaonin" />
									</span>
								</section>

								<!-- graft -->
								<html>
								<head>
								<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
									<script type="text/javascript">
									google.charts.load('current', {'packages':['line']});
									google.charts.setOnLoadCallback(drawChart);

									function drawChart() {

									var data = new google.visualization.DataTable();
									data.addColumn('number', 'กราฟ ราคาเฉลี่ยปลานิล(บาท) เดือนสิงหาคม');
									data.addColumn('number', 'เล็ก');
									data.addColumn('number', 'กลาง');
									data.addColumn('number', 'ใหญ่');

									data.addRows([
										[1,  35, 42, 60],
										[2,  35, 42, 60],
										[3,  35, 42, 60],
										[4,  35, 44, 60],
										[5,  35, 45, 60],
										[6,  35, 45, 60],
										[7,  35, 45, 60],
										[8,  35, 45, 60],
										[9,  35, 45, 75],
										[10, , 44, 67],
										[11, , 42, 67],
										[12, , 42, 67],
										[13, , 42, 65],
										[14, 35, 44, 62],
										[15, 35, 45, 65],
										[16, 35, 45, 62],
										[17, 35, 45, 65],
										[18, 35, 45, 60],
										[19, , 45, 60],
										[20, , 44, 65],
										[21, , 42, 65],
										[22, , 42, 70],
										[23, , 42, 65],
										[24, , 44, 65],
										[25, , 45, 65],
										[26, , 45, 65],
										[27, , 45, 65],
										[28, , 45, 65],
										[29, 35, 45, 62],
										[30, 35, 44, 62],
									]);

									if (screen.width < 420) {
											var options = {
										chart: {
										},
										width: 490,
										height: 240,
										axes: {
										x: {
											0: {side: 'top'}
										}
										}
									};

										} else if (screen.width < 800) {
											var options = {
										chart: {
										},
										width: 665,
										height: 380,
										axes: {
										x: {
											0: {side: 'top'}
										}
										}
									};

										} else {
											var options = {
										chart: {
										},
										width: 800,
										height: 400,
										axes: {
										x: {
											0: {side: 'top'}
										}
										}
									};
									}

									var chart = new google.charts.Line(document.getElementById('line_top_x'));

									chart.draw(data, google.charts.Line.convertOptions(options));
									}
								</script>
								</head>
								<body>
								<div id="line_top_x"></div>
								</body>
								</html>
								
							<br><br><br> 
							<p>ข้อมูลนี้เป็นราคาปลานิลที่ได้จากเว็บไซต์ 
								<a href="#"> ตลาดสี่มุมเมือง จ.ปทุมธานี</a>,
								<a href="#"> ตลาดสุรนคร จ.นครราชสีมา</a>,
								<a href="https://talaadthai.com/"> ตลาดไท จ.ปทุมธานี</a>,
								<a href="https://yingcharoen.co.th/"> ตลาดยิ่งเจริญ กรุงเทพฯ</a> 
							</p>
							<p>ดูข้อมูลเพิ่มเติม
								<a href="https://jaonin.com/price/price2562.php"> ราคาปลานิล ปี 2562</a>,
								<a href="https://jaonin.com/price/price2563.php"> ราคาปลานิล ปี 2563</a> 
							</p>




															
								

							
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