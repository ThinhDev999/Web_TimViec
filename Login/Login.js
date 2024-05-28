
$(document).ready(function () {
    $(".background-Left").on("click", function () {
        $("#slide").animate({
            marginLeft: "0",
        });
        $(".top").animate({
            marginLeft: "100%",
        });
    });
    $(".background-Right").on("click", function () {
        $("#slide").animate({
            marginLeft: "50%",
        });
        $(".top").animate({
            marginLeft: "0",
        });
    });
});