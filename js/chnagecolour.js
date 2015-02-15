$(document).ready(function(){
    if ($("#bsuc").text() < "1") {
        $(".wrapper").css("background-color", "yellow");
    };
    if ($("#fail").text() > "9") {
        $(".wrapper").css("background-color", "yellow");
    };
});
