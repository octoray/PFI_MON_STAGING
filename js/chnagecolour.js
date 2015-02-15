$(document).ready(function(){
    var number = parseInt($("#fail1").text());
    if (number >= "9") {
        $(".wrapper").css("background-color", "yellow");
    }
    var number2 = parseInt($("#fail2").text());
    if (number2 >= "9") {
        $(".wrapper").css("background-color", "yellow");
    }
});