$(document).ready(function(){
    if ($("#bsuc").text() < "1") {
        $(".wrapper").css("background-color", "yellow");
    };
    if ($("#fail").text() > "4" && $("#fail").text() < "11") {
        $(".wrapper").css("background-color", "yellow");
    };
    if ($("#fail").text() > "10") {
        $(".wrapper").css("background-color", "red");
    };
});