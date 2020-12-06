<?php
include_once "./class/Registration.php";

// collect student info sent from client
$id = $_POST["textBoxId"];
$name = $_POST["textBoxName"];
$address = $_POST["textBoxAddress"];
$phone = $_POST["textBoxPhone"];
$gender = isset($_POST["checkBoxMale"]) ? 0 : 1;
$strdob = $_POST["textBoxYear"].'-'.$_POST["dropDownListMonth"].'-'.$_POST["textBoxDay"];
$dob = date("Y-m-d", strtotime($strdob));
$email = $_POST["textBoxEmail"];
$selectedCourses = isset($_POST["listBoxSelectedCourse"]) ? $_POST["listBoxSelectedCourse"] : NULL;
$regist = new Registration();
$isSuccess = $regist->addStudent($id, $name, $address, $phone, $gender, $dob, $email);

if ($selectedCourses != NULL) {
    $regist->registerCourse($id, $selectedCourses);
}

if ($isSuccess) {
    $dob = date("d/m/Y", strtotime($strdob));
    
    echo "<tr>".
        "<td>".$id."</td>".
        "<td>".$name."</td>".
        "<td>".(($gender == 0) ? 'Nam' : 'Nữ')."</td>".
        "<td>".$dob."</td>".
        "</tr>";
}
else {
    echo "failed";
}

