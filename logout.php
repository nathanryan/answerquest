<?PHP
require_once("./scripts/membersite_config.php");

$fgmembersite->LogOut();
?>
<!-- 
*
* @reference http://www.html-form-guide.com/php-form/php-registration-form.html
* @reference http://www.html-form-guide.com/php-form/php-login-form.html
* @author Nathan Ryan, x13448212
*
*/
-->
<!DOCTYPE html>
<!-- BSHC2A Team OBCT Nathan Ryan x13448212 Keith Lok x13323161 Jefferson Tolentino x13452702 Daniel Benhamou x13341086 Usman Akhtar x13358421 -->
<html>
    <head>
        <title>Login</title>
        
        <link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a href="index.html" class="navbar-brand">ANSWERQUEST, THE QUEST FOR ANSWERS!</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-4">
                <!-- FOR SPACING -->
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading" >
                        You have logged out
                    </div>
                    <div class="panel-body">
                        <center>
                            <a href='login.php'>Login Again - Student</a>
                            <br />
                            <a href='adminlogin.php'>Login Again - Teacher</a>
                            <br />
                            <a href="index.html">Return to Homepage</a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- FOR SPACING -->
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type='text/javascript' src='js/gen_validatorv31.js'></script>
    </body>
</html>