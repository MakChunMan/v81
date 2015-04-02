<? header("Content-Type:text/html; charset=utf-8");?>
<?
/** Register Page ***/
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
            <!-- Register Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-plus"></i> <strong><?=$MSG["zh"]["Create new account"]?></strong>
            </h1>
            <!-- END Register Header -->

            <!-- Register Form -->
            <div class="block animation-fadeInQuickInv">
                <!-- Register Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ready_login.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="<?=$MSG["zh"]["Back to login"]?>"><i class="fa fa-user"></i></a>
                    </div>
                    <h2><?=$MSG["zh"]["Register"]?></h2>
                </div>
                <!-- END Register Title -->

                <!-- Register Form -->
                <form id="form-register" action="page_ready_register.html" method="post" class="form-horizontal">
                   
                </form>
                <!-- END Register Form -->
            </div>
            <!-- END Register Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                    <small><span id="year-copy"></span> &copy; <a href="http://www.facebook.com/BuyBuyMeat" target="_blank">BuyBuyMeat</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center"><strong>Terms and Conditions</strong></h3>
                    </div>
                    <div class="modal-body">
                        <h4 class="page-header">1. <strong>General</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">2. <strong>Account</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">3. <strong>Service</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">4. <strong>Payments</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-effect-ripple btn-sm btn-primary" data-dismiss="modal">I've read them!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->

        <!-- Common V81 Js Footer Include -->
        <? include("common/js_foot_include.php") ?>
        <!-- END Common V81 Js Footer Include -->

        <!-- [Page Specific] Load and execute javascript code used only in this page -->
        <script src="<?=$PATH["zh"]["static_path"]?>/js/v81/validation/readyRegister.js.php"></script>
        <script>$(function(){ ReadyRegister.init(); });</script>
        <!-- Init Load -->
        <script>
            $.ajax({
                url: "<?=$PATH["zh"]["full_url_path"]?>/PAGE/INPUT_REGISTER.do",
                cache: false
            }).done(function( html ) {
                $( "#form-register").html( html );
            });
        </script>
    </body>
</html>