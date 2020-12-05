$(function() {
    // add course(s) from listBoxCourse to listBoxSelectedCourse
    $("#buttonAdd").on("click", function() {
        let selectedCourses = $("#listBoxCourse option:selected");

        if (selectedCourses.length == 0) {
            alert("Vui lòng chọn môn học!");
        }
        else {
            $("#listBoxSelectedCourse").append($(selectedCourses).clone());
            $(selectedCourses).remove();
        }
    });

    // add all courses from listBoxCourse to listBoxSelectedCourse
    $("#buttonAddAll").on("click", function() {
        let courses = $("#listBoxCourse option");

        if (courses.length == 0) {
            alert("Không có môn học nào để chọn!");
        }
        else {
            $("#listBoxSelectedCourse").append($(courses).clone());
            $(courses).remove();
        }
    });

    // remove course(s) from listBoxSelectedCourse
    $("#buttonRemove").on("click", function() {
        let selectedCourses = $("#listBoxSelectedCourse option:selected");

        if (selectedCourses.length == 0) {
            alert("Vui lòng chọn môn học");
        }
        else {
            $("#listBoxCourse").append($(selectedCourses).clone());
            $(selectedCourses).remove();
        }
    });

    // remove all courses from listBoxSelectedCourse
    $("#buttonRemoveAll").on("click", function() {
        let selectedCourses = $("#listBoxSelectedCourse option");

        if (selectedCourses.length == 0) {
            alert("Vui lòng chọn môn học");
        }
        else {
            $("#listBoxCourse").append($(selectedCourses).clone());
            $(selectedCourses).remove();
        }
    });

    $("#buttonOk").on("click", function() {
        let items = [];
        let textToDisplay = "";

        $("#listBoxSelectedCourse option").each(function() {
            items.push($(this).text());
        });

        for (const item of items) {
            textToDisplay += item + '\n';
        }

        textToDisplay = "Các môn học được chọn:\n" + textToDisplay;
        
        alert(textToDisplay);
    });
});