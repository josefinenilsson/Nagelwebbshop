<?php
session_start();
?>
<meta http-equiv="content-type"
      content="text/html; charset=utf-8" />
 <head>
        <link rel="stylesheet" type="text/css" href="css/base.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		
		
<!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Startsida</a>
			<a class="navbar-brand" href="listcategories.php">Produkter</a>
			<a class="navbar-brand" href="questions.php">Frågor och Svar</a>
			<a class="navbar-brand" href="about.php">Om oss</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
     <!-- </div>
    </div> -->
 <div id="wrapper">
<header >
	<nav id="mainmenu">
    <ul>
        <li><a href="index.php">Startsida</a></li>
        <li><a href="listcategories.php">Produkter</a></li>
        <li><a href="about.php">Om oss</a></li>
    </ul>
		 <form class="login" role="form">
            <div class="form_group">
				<input type="text" placeholder="Email" class="form_control">
              	<input type="password" placeholder="Password" class="form_control">
				<input type="button" id="member_login"class="login_button" value="Logga in"></button>
            </div>
            
          </form>
</nav>

	
</header>


    <input type="button" class="shoppingcart" value="Kundkorg"></button>
