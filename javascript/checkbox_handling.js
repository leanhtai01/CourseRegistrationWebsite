$(function() {
    $(".gender").on("click", function() {
        $(".gender").prop("checked", false);
        $(this).prop("checked", true);
    });
});