<?PHP
require_once("./scripts/membersite_config.php");

if (!$fgmembersite->CheckLogin()) {
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

mysql_connect('localhost', 'root', 'password');

mysql_select_db('mytesting_db');

$result = mysql_query("SELECT username, points FROM quiz_takers ORDER BY points DESC");
$rank = 1;
?>
<!-- 
*
* @reference http://www.html-form-guide.com/php-form/php-registration-form.html
* @reference http://www.html-form-guide.com/php-form/php-login-form.html
* @reference http://stackoverflow.com/a/7096766
* @author Nathan Ryan, x13448212
*
*/
-->
<!DOCTYPE html>
<!-- BSHC2A Team OBCT Nathan Ryan x13448212 Keith Lok x13323161 Jefferson Tolentino x13452702 Daniel Benhamou x13341086 Usman Akhtar x13358421 -->
<html>
    <head>
        <title>Leaderboard</title>
        
        <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
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
                            <a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
			<center><h1>Hello <i><?= $fgmembersite->UserFullName() ?></i> ! Here is the</h1>
            <center><h1>ANSWERQUEST Leaderboard</h1></center>

            <table class="table table-striped" id="list">

                <tr>
                    <th>Rank</th>
                    <th>Username</th>
                    <th>Points</th>
                </tr>

                <tbody>
                </tbody>


                <?php
                if (mysql_num_rows($result)) {
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr><td>{$rank}</td>
                              <td>{$row['username']}</td>
                              <td>{$row['points']}</td></tr>";

                        $rank++;
                    }
                }
                ?>


            </table>
        </div>
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>
