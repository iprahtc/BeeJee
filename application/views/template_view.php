<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>BeeJee</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/materialize.css" />

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/materialize.js" type="text/javascript"></script>
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
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">+Новая задача</a></li>
                    <li><a href="#">Вход</a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <?php include 'application/views/'.$content_view; ?>
        </div>
	</body>
</html>