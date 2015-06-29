<?PHP


mysql_connect('mysql7.000webhost.com', 'a9684151_root', 'password123');

mysql_select_db('a9684151_mytest');

$result = mysql_query("SELECT username, percentage FROM quiz_takers ORDER BY percentage DESC");
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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
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
            <center><h1>ANSWERQUEST Leaderboard</h1></center>

            <table class="table table-striped" id="list">

                <tr>
                    <th>Rank</th>
                    <th>Username</th>
                    <th>Percentage</th>
                </tr>

                <tbody>
                </tbody>


                <?php
                if (mysql_num_rows($result)) {
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr><td>{$rank}</td>
                              <td>{$row['username']}</td>
                              <td>{$row['percentage']}</td></tr>";

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
