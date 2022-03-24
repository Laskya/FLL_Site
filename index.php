<?php
require('router.php');
$g=new Generate;
error_reporting(0);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl-pl" dir="ltr" lang="pl-pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.5">
  <meta name="description" content="Programy kosmiczne">
  <link rel="shortcut icon" href="img/glob.png">
  <!-- Ikonka strony - Miłosz Roszyk   Tekst - Franek Bartkowiak-->
  <!--Begin of stylesheets-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,700,700i&amp;subset=latin-ext">
  <link type="text/css" href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--End of stylesheets-->
  <!--Begin of script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <!--End of script-->
  <title>Programy kosmiczne</title> 
</head>
	<body>
		<div id="content-rwd" class="wrapper rwd">
			<?php $g->generateMobileHeaderMenu(); ?>
		</div>
		<div id="content" class="content">
			<header id="navigation-header">
				<div class="header" id="myHeader">
					<nav id="menu">
						<div class="wrapper desktop">
							<?php $g->generateDesktopHeaderMenu(); ?>
						</div>
						<div id="fa-fa-bars" class="wrapper mobile">
							<a class="continue" href="#"><i class="fa fa-bars"></i></a>
						</div>
					</nav>
				</div>
			</header>
			<main>
				<?php $g->loadPage(); ?>
			</main>
			<footer>
				<div class="wrapper">
					<p>© Jakub Laskowski</p>
				</div>
			</footer>
		</div>	
	</body>
</html>