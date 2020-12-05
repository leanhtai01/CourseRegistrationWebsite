<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>ĐĂNG KÝ HỌC PHẦN</h1>

    <!-- form registration -->
    <hr>
    <div>
        <form action="">
            <!-- student's information -->
            <div class="studentInfo">
                <!-- student's Id -->
                <label for="textBoxId">Mã số:</label>
                <input type="text" name="textBoxId" id="textBoxId"><br>

                <!-- student's name -->
                <label for="textBoxName">Họ và tên:</label>
                <input type="text" name="textBoxName" id="textBoxName"><br>

                <!-- student's address -->
                <label for="textBoxAddress">Địa chỉ:</label>
                <input type="text" name="textBoxAddress" id="textBoxAddress"><br>

                <!-- student's phone number -->
                <label for="textBoxPhone">Điện thoại:</label>
                <input type="text" name="textBoxPhone" id="textBoxPhone"><br>

                <!-- student's gender -->
                <label>Giới tính:</label>
                <input type="checkbox" name="checkBoxMale" id="checkBoxMale">
                <label for="checkBoxMale">Nam</label>
                <input type="checkbox" name="checkBoxFemale" id="checkBoxFemale">
                <label for="checkBoxFemale">Nữ</label><br>

                <!-- student's date of birth -->
                <label>Ngày sinh:</label>
                <select name="dropDownListMonth" id="dropDownListMonth"></select>,
                <input type="text" name="textBoxDay" id="textBoxDay">,
                <input type="text" name="textBoxYear" id="textBoxYear"><br>

                <!-- student's email -->
                <label for="textBoxEmail">Email:</label>
                <input type="text" name="textBoxEmail" id="textBoxEmail">
            </div>

            <!-- course registration -->
            <div>
                <!-- courses list -->
                <div>
                    <label>Các môn học</label>
                    <select name="listBoxCourse[]" id="listBoxCourse" multiple></select>
                </div>

                <!-- add, remove button -->
                <div>
                    <button name="buttonAdd" id="buttonAdd">&gt;</button>
                    <button name="buttonAddAll" id="buttonAddAll">&gt;&gt;</button>
                    <button name="buttonRemove" id="buttonRemove">&lt;</button>
                    <button name="buttonRemoveAll" id="buttonRemoveAll">&lt;&lt;</button>
                </div>

                <!-- selected courses -->
                <div>
                    <label>Các môn học đã chọn</label>
                    <select name="listBoxSelectedCourse[]" id="listBoxSelectedCourse" multiple></select>
                </div>

                <!-- button Ok -->
                <div>
                    <button name="buttonOk" id="buttonOk">Ok</button>
                </div>
            </div>

            <!-- submit, reset button -->
            <div>
                <input type="submit" name="buttonRegister" id="buttonRegister" value="Đăng ký">
                <input type="reset" value="Xóa">
            </div>
        </form>
    </div>

    <!-- list student -->
    <hr>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Mã số</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</body>
</html>