<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Salesperson Login</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style1.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			
			<header>
				<div class="head-icon">
					<img class="icon" src="../images/mascara.png" alt="cannot"/>
					<img class="icon" src="../images/lipstick.png" alt="cannot"/>
					<img class="icon" src="../images/female.png" alt="cannot"/>
				</div>
				<h1><strong>Beauty&nbsp;&nbsp; Store</strong></h1>
				<h2><strong>Online Database System</strong></h2>

				<nav class="codrops-demos">
                    <a class="current-demo" href="">Salesperson</a>
                </nav>
			
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<div class="login">
				<form class="form-1" action="connectS.php" method="post">
					<p class="field">
						<input type="text" name="sid" placeholder="Enter Your ID">
						<i class="icon-user icon-large"></i>
					</p>
					<p class="field">
						<input type="password" name="password" placeholder="Password">
						<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			
			</div>
        </div>

    </body>
</html>