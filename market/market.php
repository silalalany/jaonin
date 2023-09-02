<?php 
    require_once('connection.php');
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
									<a href="market.php" class="logo"><strong>Market</strong> ตลาดออนไลน์</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>
							
                            <!-- Banner -->
								<section>

									<header class="main">
										<h1>ประกาศขายปลา</h1>
									</header>

									

									<!-- tabel -->
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>วันที่</th>
														<th>ประกาศ</th>
														<th>ชนิด</th>
														<th>จังหวัด</th>
														<th>ราคา/กิโล</th>
														<th>คนสนใจ💜</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?php 
														$select_stmt = $db->prepare("SELECT * FROM db_announce");
														$select_stmt->execute();

														while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
													?>

														<tr>
															<td><?php echo $row["day"]; ?></td>
															<td><?php echo $row["user"]; ?></td>
															<td><?php echo $row["type"]; ?></td>
															<td><?php echo $row["province"]; ?></td>
															<td><?php echo $row["price"]; ?></td>
															<td><?php echo $row["love"]; ?></td>
															<td><a href="more.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">ดูเพิ่มเติม</a></td>
														</tr>

													<?php } ?>
												</tbody>
											</table>
										</div>

										<!--<center>
											<ul class="pagination">
												<li><span class="button disabled"><</span></li>
												<li><a href="#" class="page active">1</a></li>
												<li><a href="#" class="page">2</a></li>
												<li><a href="#" class="page">3</a></li>
												<li><span>&hellip;</span></li>
												<li><a href="#" class="page">8</a></li>
												<li><a href="#" class="page">9</a></li>
												<li><a href="#" class="page">10</a></li>
												<li><a href="#" class="button">></a></li>
											</ul>
										</center>-->

									

								</section>

								<section>
									<!-- botton -->
									<ul class="actions">
											<li><a href="#" class="button primary icon solid fa-search">ค้นหาประกาศ</a></li>
											<li><a href="#" class="button icon solid fa-download">ลงประกาศ</a></li>
										</ul>
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