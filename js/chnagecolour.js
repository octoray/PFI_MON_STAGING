$(document).ready(function(){
    if ($("#bsuc").text() < "1") {
        $(".wrapper").css("background-color", "yellow");
    };
    if ($("#bob").text() > "4" && $("#bob").text() < "11") {
        $(".wrapper").css("background-color", "yellow");
    };
});