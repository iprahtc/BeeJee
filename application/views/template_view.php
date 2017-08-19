<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>BeeJee</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/materialize.min.css" />

		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script src="/js/materialize.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function() { 

		});
		</script>
	</head>
	<body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo"><img src="/images/Screenshot.png"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Sass</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <?php include 'application/views/'.$content_view; ?>
	</body>
</html>