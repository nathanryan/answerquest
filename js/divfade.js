/*
*
* @reference http://community.sitepoint.com/t/making-a-div-appear-and-disappear/16144
* @reference http://jsfiddle.net/cpradio/mYDN9/
* @reference http://jsfiddle.net/mplungjan/Uk57k/
* @author Nathan Ryan, x13448212
*
*/

document.getElementById('DivA').onclick = function() {
    divTest = document.getElementById('DivB');
    if (divTest.style.display === "none") {
        divTest.style.display = 'block';
    }
    else {
        divTest.style.display = "none";
    }
    divTest = document.getElementById('DivC');
     {
        divTest.style.display = 'block';
    }
}

document.getElementById('DivB').onclick = function() {
    divTest = document.getElementById('DivA');
    if (divTest.style.display === "none") {
        divTest.style.display = 'block';
    }
    else {
        divTest.style.display = "none";
    }
    divTest = document.getElementById('DivC');
     {
        divTest.style.display = 'block';
    }
}