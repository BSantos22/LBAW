<!DOCTYPE html>
<html>
<head>
    <title>.bat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../lib/jquery/jquery-ui.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="<?=$cssPath?>">
    <link rel="stylesheet" href="../style/footer.css">
	<script src="../lib/jquery/jquery.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../lib/jquery/jquery-ui.js"></script>
	<script src="../scripts/header.js"></script>
	<script src="<?=$jsPath?>"></script>
</head>
<body>
	<header>
		<!--Main nav-->
		<nav class="navbar navbar-default" id="main-nav">
			<div class="container-fluid">
				<!--Logo-->
				<div class="nav-content col-xs-3 col-sm-3 col-md-3 col-lg-3 navbar-header" id="logo">
					<a class="navbar-brand" href="home.php">
						<img src="../resources/logo/logo.png" class="hidden-xs">
						<img src="../resources/logo/logo-mobile.png" class="hidden-sm hidden-md hidden-lg">
					</a>
				</div>
				
				<!--Search bar-->
				<div class="search nav-content col-md-6 col-lg-6 hidden-xs hidden-sm">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<a href="search.php">
								<button class="btn btn-default" id="search-bttn" type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</a>
						</div>
					</div>
				</div>
				
				<!--Menu-->
				<div class="nav-content col-xs-9 col-sm-9 col-md-3 col-lg-3" id="menu" align="right">
					<!-- Logged in user -->
					<ul class="nav navbar-nav navbar-right">
						<li><a data-toggle="modal" data-target="#authentication-modal"><span class="glyphicon glyphicon-user"></span></a></li>
						<li><a href="favorites.php"><span class="glyphicon glyphicon-heart"></span></a></li>
						<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Search nav for small screens -->
		<nav class="search navbar navbar-default hidden-md hidden-lg">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-btn">
					<a href="search.php">
						<button class="btn btn-default" id="search-bttn" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</a>
				</div>
			</div>
		</nav>
		
		<!-- Secondary nav -->
		<nav class="navbar navbar-default" id="secondary-nav">
			<!-- Catergory list -->
			<ul class="nav navbar-nav hidden-xs">
				<li><a href="category.php">Smartphones</a></li>
				<li><a href="category.php">Tablets</a></li>
				<li><a href="category.php">Peripherals</a></li>
				<li><a href="category.php">Computers</a></li>
				<li><a href="category.php">Gaming</a></li>
				<li><a href="category.php">Cameras</a></li>
				<li><a href="category.php">Accessories</a></li>
			</ul>
			
			<!-- Dropdown for small devices -->
			<div class="container-fluid hidden-sm hidden-md hidden-lg">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse-categories">Categories <span class="caret"></span></a>
							</h4>
						</div>
						<div id="collapse-categories" class="panel-collapse collapse">
							<ul class="list-group">
								<li class="list-group-item"><a href="#">Smartphones</a></li>
								<li class="list-group-item"><a href="#">Tablets</a></li>
								<li class="list-group-item"><a href="#">Peripherals</a></li>
								<li class="list-group-item"><a href="#">Computers</a></li>
								<li class="list-group-item"><a href="#">Gaming</a></li>
								<li class="list-group-item"><a href="#">Cameras</a></li>
								<li class="list-group-item"><a href="#">Accessories</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Authentication modal -->
		<div class="modal" id="authentication-modal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<a type="button" class="closebtn" data-dismiss="modal">&times;</a>
						
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#login-tab">Login</a></li>
							<li><a data-toggle="tab" href="#register-tab">Register</a></li>
						</ul>
					</div>
				
					<div class="modal-body">
						<div class="tab-content">
							<div id="login-tab" class="tab-pane active">
								<input type="text" name="username" placeholder="Email/Username" required>
								<input type="password" name="password" placeholder="Password" required>
								<button>Log in</button>								
							</div>
							<div id="register-tab" class="tab-pane">
								<input type="text" name="username" placeholder="Username" required>
								<input type="text" name="name" placeholder="Name" required>
								<input type="text" name="email" placeholder="Email" required>
								<input type="password" name="password" placeholder="Password" required>
								<input type="password" name="password" placeholder="Confirm password" required>
								<button>Register</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</header>
	<main>