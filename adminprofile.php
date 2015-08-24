<?php
require_once("./scripts/admin_membersite_config.php");

if (!$fgmembersite->CheckLogin()) {
    $fgmembersite->RedirectToURL("adminlogin.php");
    exit;
}
/*
PHP, MySQL, Javascript Timed Quiz
    Copyright (C) 2012  Isaac Price

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

	PHP, MySQL, Javascript Timed Quiz  Copyright (C) 2012  Isaac Price
    This program comes with ABSOLUTELY NO WARRANTY.
    This is free software, and you are welcome to redistribute it
    under certain conditions found in the GNU GPL license
*/
$msg = "";
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    $msg = strip_tags($msg);
    $msg = addslashes($msg);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Profile</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/scorestyle.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
        <link href="font/font_icons8.css" rel="stylesheet">

        <script>
            function startQuiz(url){
                window.location = url;
            }
        </script>
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
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <center><b><?php echo $msg; ?></b></center>
        <div class="container">

            <div class="row">
                <div class="col-md-3">

                </div>
                <a href="index.html"><div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Homepage</div>
                        <div class="panel-body"><img src="./img/home.png" class="img-responsive center-block" alt="panel1"></div>
                    </div></a>
                    </div>
                <div onClick="startQuiz('quiz.php?question=1')" class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Quiz</div>
                        <div  class="panel-body"><img src="./img/quiz.png" class="img-responsive center-block" alt="panel1"></div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>

            </div>

            <div class="row">
                <div class="col-md-3">

                </div>
                <a href="addQuestions.php"><div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add/Remove Questions</div>
                        <div class="panel-body"><img src="./img/editquiz.png" class="img-responsive center-block" alt="panel1"></div>
                    </div></a>
			</div>
			<a href="leaderboard.php"><div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Leaderboard</div>
                        <div class="panel-body"><img src="./img/score.png" class="img-responsive center-block" alt="panel1"></div>
                    </div></a>
                    </div>
			</div>


                    <!-- Bootstrap core JavaScript
================================================== -->
                    <!-- Placed at the end of the document so the pages load faster -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/docs.min.js"></script>
                    </body>
                </html>