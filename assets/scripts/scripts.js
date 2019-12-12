$(document).ready(function () {

    $("#team-player-signup h3").click(function () {
        if (!$(this).hasClass("active")) {
            $("#team-player-signup h3").removeClass("active");
            $(this).addClass("active");

            if ($(this).text() === "Player") {
                $("#player-form").addClass("active");
                $("#team-form").removeClass("active");
            }

            if ($(this).text() === "Team") {
                $("#player-form").removeClass("active");
                $("#team-form").addClass("active");
            }

        }
    });

});