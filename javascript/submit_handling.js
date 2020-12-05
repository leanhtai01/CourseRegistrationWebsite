$(function() {
    $("#formRegistration").submit(function(e) {
        e.preventDefault();

        // select all selected courses to send to server
        $("#listBoxSelectedCourse option").prop("selected", true);

        let form = $(this);
        let url = form.attr("action");

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(data) {
                if (data != "failed") {
                    $('#tableStudent tr:last').after(data);
                }
            }
        });

        // un-select all selected course
        $("#listBoxSelectedCourse option").prop("selected", false);
    });
});