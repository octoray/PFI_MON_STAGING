$(document).ready(function(){
    if ($("#bsuc").text() < "1") {
        $(".wrapper").css("background-color", "yellow");
    };
    if ($("#bob").text() > "10") {
        $(".wrapper").css("background-color", "red");
    };
});