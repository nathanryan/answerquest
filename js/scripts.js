// Javascript code used by the application 
// Author: Dr. Arghir-Nicolae Moldovan



/*
*
* @reference Dr. Arghir-Nicolae Moldovan
* @reference http://www.w3schools.com/html/html5_webstorage.asp
* @author Keith Lok, x13323161
*
*/
function addScore() {
    if (typeof (Storage) !== "undefined") {
        if (sessionStorage.score) {
            sessionStorage.score = Number(sessionStorage.score) + 1;
        } else {
            sessionStorage.score = 1;
        }
        document.getElementById("score").innerHTML = sessionStorage.score;
    } else {
        document.getElementById("score").innerHTML = "Sorry, your browser does not support web storage...";
    }

}
;

/*
*
* @reference Dr. Arghir-Nicolae Moldovan
* @author Nathan Ryan, x13448212
* @author Keith Lok, x13323161
*
*/
// Function to send game settings and score to server 
function ajaxSubmit() {
    // Store data to be submitted into variables
    var username = $.trim($("input[name=username]").val());
    var score = sessionStorage.score;

    // Fetch data to be posted
    allData = "username=" + username + "&score=" + sessionStorage.score;

    // Setup the ajax request
    $.ajax({
        type: "POST",
        url: "./savedata.php",
        data: allData,
        fail: function () {
            alert("error");
        }
    });

    // return false so the page does not actually change
    return false;
}
;

//document ready
$(document).ready(function () {
    $('.start').on('click', function () { //initialise a game when the start button is clicked
        var username = $.trim($("input[name=username]").val());
        if (!username) {
            // Tell user to fill it in
            alert("Please enter a name!")
        } else {
            // Wait 3 seconds and post the data to the server
            setTimeout(ajaxSubmit(), 3000)
            document.getElementById("scoremessage").innerHTML = "Your Score has been Saved!";
        }
    });
});

/*
*
* @reference http://www.html5gamedevs.com/topic/6970-phaser-js-share-score-on-twitter/?p=41585
* @author Nathan Ryan, x13448212
*
*/
function tweetscore() {
    //share score on twitter
    var tweetbegin = 'http://twitter.com/home?status=';
    var tweettxt = 'I got ' + sessionStorage.score + ' points playing AnswerQuest ! -' + window.location.href + '.';
    var finaltweet = tweetbegin + encodeURIComponent(tweettxt);
    window.open(finaltweet, '_blank');
}



