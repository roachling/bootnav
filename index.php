<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>BootNav</title>
	    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	    <link rel="stylesheet" href="css/custom.css" type="text/css" />
	</head>

	<body>

	<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		
		<div class="container">
	        
		    <!-- Title -->
		    <div class="navbar-header pull-left">
		        <a href="/" class="navbar-brand">BootNav</a>
		    </div>
		        
	        <!-- 'Sticky' (non-collapsing) right-side menu item(s) -->
	        <div class="navbar-header pull-right">
				<ul class="nav pull-left">
	        	    <!-- This works well for static text, like a username -->
		            <li class="navbar-text pull-left">User Name</li>
		            <!-- Add any additional bootstrap header items.  This is a drop-down from an icon -->
		            <li class="dropdown pull-right">
		              	<a href="#" data-toggle="dropdown" style="color:#777; margin-top: 5px;" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
		              	<ul class="dropdown-menu">
		                	<li><a href="/users/id" title="Profile">Profile</a></li>
		                	<li><a href="/logout" title="Logout">Logout</a>
		                	</li>
		              </ul>
		            </li>
				</ul>

				<!-- Required bootstrap placeholder for the collapsed menu -->
	          	<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        </div>

	        <!-- The Collapsing items navbar-left or navbar-right -->
			<div id="nav-pushdown" class="collapse navbar-collapse navbar-left">
				<!-- pull-right keeps the drop-down in line -->
				<ul class="nav navbar-nav pull-right">
					<li><a href="/news">News</a></li>
					<li><a href="/Shop">Shop</a></li>
				</ul>
			</div>

			<!-- Additional navbar items -->
			<div class="down2 collapse navbar-collapse navbar-right">
				<!-- pull-right keeps the drop-down in line -->
				<ul class="nav navbar-nav pull-right">
					<li><a href="/locator">Locator</a></li>
					<li><a href="/extras">Extras</a></li>
				</ul>
			</div>
		</div>
		
	</nav>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
</html>