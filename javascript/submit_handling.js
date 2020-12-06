$(function() {
    $("#formRegistration").submit(function(e) {
        e.preventDefault();

        // select all selected courses to send to server
        $("#listBoxSelectedCourse option").prop("selected", true);

        let form = $(this);
        let url = form.attr("action");
        let day = $("#textBoxDay").val();
        let month = $("#dropDownListMonth").find("option:selected").val();
        let year = $("#textBoxYear").val();
        
        if (!isDateValid(day, month, year)) {
            alert("Ngày sinh không hợp lệ!");

            return false;
        }
        
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(data) {
                if (data != "failed") {
                    $('#tableStudent tbody').append(data);
                }
                else if (data == "failed") {
                    alert("Học sinh đã tồn tại! Đăng ký môn học thành công!");
                }
            }
        });

        // un-select all selected course
        $("#listBoxSelectedCourse option").prop("selected", false);
    });
});