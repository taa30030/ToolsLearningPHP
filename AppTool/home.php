<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Work+Sans:400,600');
		body {
			margin: 0;
			background: #F7F7F7;
			font-family: 'Work Sans', sans-serif;
			font-weight: 800;
		}

		.container {
			width: 80%;
			margin: 0 auto;
		}

		header {
			background: #ffffff;
		}

		header::after {
			content: '';
			display: table;
			clear: both;
		}

		.logo {
			float: left;
			padding: 10px 0;
		}

		nav {
			float: right;
			margin-bottom: 20px;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		nav li {
			display: inline-block;
			margin-left: 70px;
			padding-top: 23px;

			position: relative;
		}
		
		nav li .drop {
			margin-left: 0;
		}

		nav a {
			color: #444;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 14px;
			width: 20px;
		}

		nav a:hover {
			color: #1294FF;
		}

		nav a::before {
			content: '';
			display: block;
			height: 5px;
			background-color: #1294FF;

			position: absolute;
			top: 0;
			width: 0%;

			transition: all ease-in-out 250ms;
		}

		nav a:hover::before {
			width: 100%;
		}

		</style>
	</head>
	<body>
		<header>
		
				<div class="container">
					<nav>
						<ul>
							<li><a href="#">หน้าหลัก</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการข้อมูล<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li class="drop"><a href="#">บท1</a></li>
												<li class="drop"><a href="#">บท2</a></li>
												<li class="drop"><a href="#">บท3</a></li>
												<li class="drop"><a href="#">บท4</a></li>
												<li class="drop"><a href="#">บท5</a></li>
												<li class="drop"><a href="#">บท6</a></li>
												<li class="drop"><a href="#">บท7</a></li>
												<li class="drop"><a href="#">บท8</a></li>
												<li class="drop"><a href="#">บท9</a></li>
												<li class="drop"><a href="#">บท10</a></li>
												
											</ul>
										</li>
							<li><a href="#">จัดการข้อสอบ</a></li>
							<li><a href="#">ถาม-ตอบ</a></li>
							<li><a href="#">ออกจากระบบ</a></li>
						</ul>
					</nav>
				</div>
			</header>
	</body>
</html>