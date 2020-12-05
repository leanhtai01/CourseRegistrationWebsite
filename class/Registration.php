<?php
include_once("./class/Database.php");

class Registration {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    private function isStudentExist($id) {
        $sql = "SELECT count(id) as num
                FROM student
                WHERE id = :id";
        
        $values = array(
            array(":id", $id)
        );

        $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

        return $result["num"] == 0 ? false : true;
    }

    private function isRegistered($studentId, $courseId) {
        $sql = "SELECT count(student_id) as num
                FROM registration
                WHERE student_id = :studentId AND course_id = :courseId";
        
        $values = array(
            array(":studentId", $studentId),
            array(":courseId", $courseId)
        );

        $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

        return $result["num"] == 0 ? false : true;
    }

    public function addStudent($id, $full_name, $address, $phone_number, $gender, $date_of_birth, $email) {
        $isSuccess = true;
        if ($this->isStudentExist($id)) {
            $isSuccess = false;
        }
        else {
            $sql = "INSERT INTO student (id, full_name, address, phone_number, gender, date_of_birth, email)
                    VALUES (:id, :full_name, :address, :phone_number, :gender, :date_of_birth, :email)";
            
            $values = array(
                array(":id", $id),
                array(":full_name", $full_name),
                array(":address", $address),
                array(":phone_number", $phone_number),
                array(":gender", $gender),
                array(":date_of_birth", $date_of_birth),
                array(":email", $email)
            );

            $this->db->queryDB($sql, Database::EXECUTE, $values);
        }

        return $isSuccess;
    }

    public function registerCourse($studentId, $courseIdList) {
        $sql = "INSERT INTO registration (student_id, course_id)
                VALUES (:studentId, :courseId)";

        foreach ($courseIdList as $courseId) {
            if (!$this->isRegistered($studentId, $courseId)) {
                $values = array(
                    array(":studentId", $studentId),
                    array(":courseId", $courseId)
                );

                $this->db->queryDB($sql, Database::EXECUTE, $values);
            }
        }
    }
}