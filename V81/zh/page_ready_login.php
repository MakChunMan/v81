<? header("Content-Type:text/html; charset=utf-8");?>
<?
/** Login Page ***/
include("common/php_include.php");
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
       <? include("common/no_login_head.php") ?>
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

        <!-- Common V81 Js Footer Include -->
        <? include("common/js_foot_include.php") ?>
        <!-- END Common V81 Js Footer Include -->

        <!-- [Page Specific] Load and execute javascript code used only in this page -->
        <script src="<?=$PATH["zh"]["static_path"]?>/js/v81/validation/login.js.php"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
	<!-- Init Load -->
		<script>
			$.ajax({
				url: "<?=$PATH["zh"]["full_url_path"]?>/PAGE/INPUT_LOGIN.do",
				type: "post",
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