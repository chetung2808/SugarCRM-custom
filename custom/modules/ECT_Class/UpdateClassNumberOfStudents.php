<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateClassNumberOfStudents
{
    public function updateClassNumberOfStudents($bean, $event, $arguments)
    {
        // Kiểm tra xem có thay đổi trong quan hệ học viên - lớp học hay không
        if ($arguments['related_module'] === 'ECT_Student') {
            // Lấy danh sách học viên hiện tại của lớp học
            $enrolledStudents = $bean->get_linked_beans('ect_class_ect_student', 'ECT_Student');

            // Cập nhật giá trị class_numberofstudents
            $bean->class_numberofstudents = count($enrolledStudents);

            // Lưu lớp học để cập nhật giá trị vào cơ sở dữ liệu
            $bean->save();
        }
    }
}
