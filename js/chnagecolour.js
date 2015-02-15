$(document).ready(function(){
    if ($("#bsuc").text() < "1") {
        $(".wrapper").css("background-color", "red");
    };
    if ($("#subf").text() > "5") {
        $(".wrapper").css("background-color", "red");
    };
});