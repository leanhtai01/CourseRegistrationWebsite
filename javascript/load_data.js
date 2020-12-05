$(function() {
    // load month to dropDownListMonth
    for (let month = 1; month <= 12; month++) {
        option = '<option value="' + month + '">' + month + "</option>";
        $("#dropDownListMonth").append(option);
    }
});