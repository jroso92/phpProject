<?php 
    # Stop Hacking attempt
    define('__APP__', TRUE);
    
    # Start session
    session_start();
    
	#functions
	include ("functions.php");
	
    # Database connection
    include ("dbconn.php");
    
    # Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
    if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
    
    # Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
    
    if (!isset($menu)) { $menu = 1; }
    
    
?>
<!DOCTYPE HTML>
<html>
	<head>
	
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		
		<title>Fight site</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Josip Roso">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<header>
		<div class="banner"></div>
		<nav>
			<?php include("menu.php"); ?>
		</nav>
		
	</header>
	<main>
	<?php 
	if(!isset($menu) || $menu == 1) { include("home.php"); }
	
	else if ($menu == 2) { include("news.php"); }
	
	else if ($menu == 3) { include("kontakt.php"); }
	
	else if ($menu == 4) { include("oNama.php"); }
	
	else if ($menu == 5) { include("galerija.php"); }
	
	else if ($menu == 6) { include("register.php"); }

	else if ($menu == 7) { include("signin.php"); }

	else if ($menu == 8) { include("admin.php"); }
	 ?>
	</main>
	<footer>
		<p>Copyright &copy; 2019 Josip Roso. <a href="https://github.com/jroso92/Web-aplikacije-projekt"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>