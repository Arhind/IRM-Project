<?php
session_start();
?>
<!DOCTYPE html >

<html >
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IRM Project : Page 1</title>
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /></head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="try1.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#"><b>WELCOME</b></h1>
		</div>
	</div>
</div>
<div id="wrapper">
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#"><b><u>Welcome User </b><u></a></h2>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>NAME : <?php echo $_SESSION['user']['name']; ?></p>
							<p>AGE : <?php echo $_SESSION['user']['age']; ?> year </p>
							<p>HEIGHT : <?php echo $_SESSION['user']['height']; ?> m</p>
							<p>WIEGHT : <?php echo $_SESSION['user']['Weight']; ?> kg</p>
							<p><strong>RESULTS</strong>:</p>
							<p> <TABLE border="1"> <tr> <td><b>Body Status</b></td> <td> <?php echo $_SESSION['result']['body_status']; ?> </td></tr> 
							                        <tr> <td><B>BMI</B></td> <td> <?php echo $_SESSION['result']['bmi']; ?></td></tr> 
													<tr> <td><B>Disease</B></td> <td><?php echo $_SESSION['result']['disease']; ?> </td></tr> 
													</TABLE>&nbsp;</p>
							<p class="links"><a href="#" class="button">b. Check i</a></p>
						</div>
					</div>
					<div class="post post-alt">
						<h2 class="title"><a href="#">what you should do </a></h2>
						<p class="meta"><span class="date">May 10, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><?php echo $_SESSION['result']['message']; ?></p>
							<p class="links"><a href="#" class="button">Read More</a></p>
						</div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">Exercise and diet </a></h2>
						<p class="meta"><span class="date">May 08, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<p>
							<?php echo $_SESSION['result']['message2']; ?>
						</p>
							<p class="links"><a href="#" class="button">Read More</a></p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Search Here</h2>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
						<li>
							<h2>About User</h2>
							<p><?php echo $_SESSION['result']['about']; ?></p>
						</li>
						<li>
							<h2>Exercise</h2>
							<ul>
							<?php 
								$category = explode(',', $_SESSION['result']['categories']);
								foreach ($category as $key => $value) {
							?>
								<li><a href="#"><?php echo $value; ?></a></li>
							<?php
								}
							?>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">www.ibodyfit.com</a></li>
								<li><a href="#">www.dailyburn.com</a></li>
								<li><a href="#">www.trainonline.com</a></li>
								<li><a href="#">wwww.10fitness.com</a></li>
								<li><a href="#">www.active.com</a></li>
								<li><a href="#">www.self.com</a></li>
							</ul>
						</li>
						<li>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p><font size ="5">&copy;  Design by My Group : <b>Fitness Chasers</b></font></p>
</div>
<!-- end #footer -->
</body>
</html>


