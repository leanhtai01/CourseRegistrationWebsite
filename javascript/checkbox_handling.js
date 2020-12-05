$(function() {
    // let user select only one checkbox gender a time
    $(".gender").on("click", function() {
        $(".gender").prop("checked", false);
        $(this).prop("checked", true);
    });
});