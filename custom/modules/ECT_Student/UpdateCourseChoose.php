<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateCourseChoose
{
    public function updateCourse($bean, $event, $arguments)
    {
        // Kiểm tra xem module hiện tại là "ECT_Class"
        if ($bean->module_name === 'ECT_Student') {
            // Lấy giá trị từ trường "course_payment" của bản ghi "ECT_Course" liên quan
            $relatedCourse = $bean->get_linked_beans('ect_course_ect_student', 'ECT_Course');
            if (!empty($relatedCourse)) {
                $courseName = $relatedCourse[0]->name;

                // Gán giá trị vào trường "class_payment_c" của đối tượng "ECT_Class" hiện tại
                $bean->student_course = $courseName;
            }
        }

    }
}


