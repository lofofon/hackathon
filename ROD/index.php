<?php session_start(); ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if($_SESSION["autorizacao"]==true){

	?>

	<!DOCTYPE HTML>
	<html>
	<head>
		<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- jQuery -->
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
		<!-- lined-icons -->
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<!-- //lined-icons -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!--clock init-->
		<script src="js/css3clock.js"></script>
		<!--Easy Pie Chart-->
		<!--skycons-icons-->
		<script src="js/skycons.js"></script>

		<script src="js/jquery.easydropdown.js"></script>

		<!--js -->
		<link rel="stylesheet" href="css/vroom.css">
		<script type="text/javascript" src="js/vroom.js"></script>
		<script type="text/javascript" src="js/TweenLite.min.js"></script>
		<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>

		<!--//skycons-icons-->
	</head> 
	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="inner-content">
					<!-- header-starts -->
					<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
						<div class="clearfix"></div>
					</div>
					<!-- //header-ends -->
					<div id="telaDeMostragem" class="outter-wp">
						<div class="custom-widgets">
							<div class="row-one">
								<div class="tabela-consulta">
									<table id="tabelaDisplay">	</table>
								</div>
								<div class="clearfix"> </div>	
							</div>
						</div>
						<!--footer section start-->
						<footer>
							<p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
						</footer>
						<!--footer section end-->
					</div>
					<!--//content-inner-->
					<!--/sidebar-menu-->
					<div class="sidebar-menu">
						<header class="logo">
							<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Hackathon</h1></span> 
								<!--<img id="logo" src="" alt="Logo"/>--> 
							</a> 
						</header>
						<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
						<!--/down-->
						<div class="down">	
							<a href="index.html"><img src="images/admin.jpg"></a>
							<a href="index.html"><span class="name-caret"><?php echo $_SESSION["Nome"];?></span></a><!-- Nessa linha coloca-se o nome de usuário no perfil de acordo com a tabela-->
							<p><?php echo$_SESSION["nome_Empresa"];?></p><!-- Nessa linha coloca-se o nome da empresa no perfil, de acordo com a tabela -->
							<ul>
								<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
								<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
								<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
							</ul>
						</div>
						<!--//down-->
						<div class="menu">
							<ul id="menu" >
								<li><a onclick="formularioConsulta()"><i class="fa fa-tachometer"></i> <span>Fazer checagem</span></a></li>

							</ul>
						</div>
					</div>
					<div class="clearfix"></div>		
				</div>
				<script>
					var toggle = true;

					$(".sidebar-icon").click(function() {                
						if (toggle)
						{
							$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
							$("#menu span").css({"position":"absolute"});
						}
						else
						{
							$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
							setTimeout(function() {
								$("#menu span").css({"position":"relative"});
							}, 400);
						}		
						toggle = !toggle;
					});
				</script>
				<!-- Bootstrap Core JavaScript -->
				<script src="js/bootstrap.min.js"></script>
			</body>
			</html>
		<?php }else{
			header("Location: login.php"); 
			exit();
		}
		?>