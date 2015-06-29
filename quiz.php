<?php
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
session_start();
if(isset($_GET['question'])){
    $question = preg_replace('/[^0-9]/', "", $_GET['question']);
    $next = $question + 1;
    $prev = $question - 1;
    if(!isset($_SESSION['qid_array']) && $question != 1){
        $msg = "Sorry! No cheating.";
        header("location: profile.php?msg=$msg");
        exit();
    }
    if(isset($_SESSION['qid_array']) && in_array($question, $_SESSION['qid_array'])){
        $msg = "Sorry, Cheating is not allowed. You will now have to start over. Haha.";
        unset($_SESSION['answer_array']);
        unset($_SESSION['qid_array']);
        session_destroy();
        header("location: profile.php?msg=$msg");
        exit();
    }
    if(isset($_SESSION['lastQuestion']) && $_SESSION['lastQuestion'] != $prev){
        $msg = "Sorry, Cheating is not allowed. You will now have to start over. Haha.";
        unset($_SESSION['answer_array']);
        unset($_SESSION['qid_array']);
        session_destroy();
        header("location: profile.php?msg=$msg");
        exit();
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz Page</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <script type="text/javascript">
            function countDown(secs,elem) {
                var element = document.getElementById(elem);
                element.innerHTML = "You have "+secs+" seconds remaining.";
                if(secs < 1) {
                    var xhr = new XMLHttpRequest();
                    var url = "userAnswers.php";
                    var vars = "radio=0"+"&qid="+<?php echo $question; ?>;
                    xhr.open("POST", url, true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if(xhr.readyState == 4 && xhr.status == 200) {
                            alert("You did not answer the question in the allotted time. It will be marked as incorrect.");
                            clearTimeout(timer);
                        }
                    }
                    xhr.send(vars);
                    document.getElementById('counter_status').innerHTML = "";
                    document.getElementById('btnSpan').innerHTML = '<h2>Times Up!</h2>';
                    document.getElementById('btnSpan').innerHTML += '<a href="quiz.php?question=<?php echo $next; ?>">Click here now</a>';

                }
                secs--;
                var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
            }
        </script>
        <script>
            function getQuestion(){
                var hr = new XMLHttpRequest();
                hr.onreadystatechange = function(){
                    if (hr.readyState==4 && hr.status==200){
                        var response = hr.responseText.split("|");
                        if(response[0] == "finished"){
                            document.getElementById('status').innerHTML = response[1];
                        }
                        var nums = hr.responseText.split(",");
                        document.getElementById('question').innerHTML = nums[0];
                        document.getElementById('answers').innerHTML = nums[1];
                        document.getElementById('answers').innerHTML += nums[2];
                    }
                }
                hr.open("GET", "questions.php?question=" + <?php echo $question; ?>, true);
                hr.send();
            }
            function x() {
                var rads = document.getElementsByName("rads");
                for ( var i = 0; i < rads.length; i++ ) {
                    if ( rads[i].checked ){
                        var val = rads[i].value;
                        return val;
                    }
                }
            }
            function post_answer(){
                var p = new XMLHttpRequest();
                var id = document.getElementById('qid').value;
                var url = "userAnswers.php";
                var vars = "qid="+id+"&radio="+x();
                p.open("POST", url, true);
                p.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                p.onreadystatechange = function() {
                    if(p.readyState == 4 && p.status == 200) {
                        document.getElementById("status").innerHTML = '';
                        
                        var url = 'quiz.php?question=<?php echo $next; ?>';
                        window.location = url;
                    }
                }
                p.send(vars);
                document.getElementById("status").innerHTML = "processing...";

            }
        </script>
        <script>
            window.oncontextmenu = function(){
                return false;
            }
        </script>
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
        <div id="counter_status"></div>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">Question </div>
                <div  class="panel-body">

                    <div id="status">

                        <div id="question"></div>

                    </div>

                    <br/>



                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Answers </div>
                <div  class="panel-body">
                    <div id="answers"></div>
                    <br />
                    <a href="profile.php"><button type="button" class="btn btn-default "> Quit Quiz </button></a>
                </div>
            </div>
        </div> 

        <script type="text/javascript">countDown(30,"counter_status");</script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/bootstrap.js"></script>
                        <script src="js/divfade.js"></script>
                        <script src="js/scripts.js"></script>
                        <script src="js/randomize.js"></script>
    </body>
</html>