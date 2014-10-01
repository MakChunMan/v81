<?
include("zh_.php");
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>AppUI - Bootstrap Admin Web App Template</title>

        <meta name="description" content="AppUI is a Bootstrap Admin Web App Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="apple-touch-icon" href="../img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="../img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="../img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="../img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="../img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="../img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="../img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="../img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="../css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="../css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="../css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong>Welcome to BuyBuyMeat Estore</strong>
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ready_reminder.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="<?=$MSG["zh"]["Forgot your password?"]?>"><i class="fa fa-exclamation-circle"></i></a>
                        <a href="page_ready_register.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="<?=$MSG["zh"]["Create new account"]?>"><i class="fa fa-plus"></i></a>
                    </div>
                    <h2><?=$MSG["zh"]["Please Login"]?></h2>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                <form id="form-login" action="/do/" method="post" class="form-horizontal">
		</form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year-copy"></span> &copy; <a href="http://www.facebook.com/BuyBuyMeat" target="_blank">BuyBuyMeat</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="../js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="/v81/js/v81/validation/login.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
	<!-- Init Load -->
		<script>
			$.ajax({
				url: "http://127.0.0.1/do/PAGE/INPUT_LOGIN",
				cache: false
			}).done(function( html ) {
//				alert(html);
				$( "#form-login").html( html );
			});
		</script>
	<!--- debug --->
	<a href="javascript:void(0)" onclick="$('#ajax_source').text($( '#form-login').html());">Source</a>
	<div id="ajax_source" style="color:white">
	</div>
    </body>
</html>