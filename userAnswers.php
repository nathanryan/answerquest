<?php 
require_once("./scripts/membersite_config.php");

if (!$fgmembersite->CheckLogin()) {
    $fgmembersite->RedirectToURL("login.php");
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

if(isset($_POST['radio']) && $_POST['radio'] != ""){
    $answer = preg_replace('/[^0-9]/', "", $_POST['radio']);
    if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
        $_SESSION['answer_array'] = array($answer);
    }else{
        array_push($_SESSION['answer_array'], $answer);
    }

}
if(isset($_POST['qid']) && $_POST['qid'] != ""){
    $qid = preg_replace('/[^0-9]/', "", $_POST['qid']);
    if(!isset($_SESSION['qid_array']) || count($_SESSION['qid_array']) < 1){
        $_SESSION['qid_array'] = array($qid);
    }else{
        array_push($_SESSION['qid_array'], $qid);
    }
    $_SESSION['lastQuestion'] = $qid;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Quiz Page</title>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
    </head>

    <body onLoad="getQuestion()">
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
            <div class="panel panel-success">
                <div class="panel-heading">Quiz Over </div>
                <div  class="panel-body">


                    <?php
require_once("scripts/connect_db.php");
$response = ""; 
if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
    $response = "<center><b>You have not answered any questions yet</b></center>";
    echo $response;
    exit();
}else{
    $countCheck = mysql_query("SELECT id FROM questions")or die(mysql_error());
    $count = mysql_num_rows($countCheck);
    $numCorrect = 0;
    foreach($_SESSION['answer_array'] as $current){
        if($current == 1){
            $numCorrect++;
        }
    }
    $points = $numCorrect++;
    $points = intval($points);
    if(isset($_POST['complete']) && $_POST['complete'] == "true"){
        if(!isset($_POST['username']) || $_POST['username'] == ""){
            echo "Sorry, We had an error";
            exit();
        }
        $username = $_POST['username'];
        $username = mysql_real_escape_string($username);
        $username = strip_tags($username);
        if(!in_array("1", $_SESSION['answer_array'])){
            $sql = mysql_query("INSERT INTO quiz_takers (username, points, date_time) 
		VALUES ('$username', '0', now())")or die(mysql_error());
            echo "<center><b>
        Oh no ! You scored $points points.
</center></b>
        ";
            unset($_SESSION['answer_array']);
            unset($_SESSION['qid_array']);
            
            exit();
        }
        $sql = mysql_query("INSERT INTO quiz_takers (username, points, date_time) 
	VALUES ('$username', '$points', now())")or die(mysql_error());
        echo "<center><b>Thanks for taking the quiz! You scored $points points</center></b>";
        unset($_SESSION['answer_array']);
        unset($_SESSION['qid_array']);

        exit();
    }
}
                    ?>

                </div>
            </div>
        </div> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>
</html>