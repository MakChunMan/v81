<? header("Content-Type:text/html; charset=utf-8");?>
<? 
/** Forget Password ***/
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
            <!-- Reminder Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-history"></i> <strong><?=$MSG["zh"]["Reminder"]?></strong>
            </h1>
            <!-- END Reminder Header -->

            <!-- Reminder Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Reminder Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ready_login.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="<?=$MSG["zh"]["Back to login"]?>"><i class="fa fa-user"></i></a>
                    </div>
                    <h2><?=$MSG["zh"]["Reminder2"]?></h2>
                </div>
                <!-- END Reminder Title -->

                <!-- Reminder Form -->
                <form id="form-reminder" method="post" class="form-horizontal">
                </form>
                <!-- END Reminder Form -->
            </div>
            <!-- END Reminder Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/RcsdAh" target="_blank">AppUI 1.2</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- Common V81 Js Footer Include -->
        <? include("common/js_foot_include.php") ?>
        <!-- END Common V81 Js Footer Include -->

        <!-- [Page Specific] Load and execute javascript code used only in this page -->
        <script src="<?=$PATH["zh"]["static_path"]?>/js/v81/validation/reminder.js.php"></script>
        <script>$(function(){ ReadyReminder.init(); });</script>
            <!-- Init Load -->
        <script>
            $.ajax({
                url: "<?=$PATH["zh"]["full_url_path"]?>/PAGE/INPUT_REMINDER.do",
                cache: false
            }).done(function( html ) {
                $( "#form-reminder").html( html );
            });
        </script>
        <!--- debug --->
        <a href="javascript:void(0)" onclick="$('#ajax_source').text($( '#form-reminder').html());">Source</a>
        <div id="ajax_source" style="color:white">
        </div>
    </body>
</html>