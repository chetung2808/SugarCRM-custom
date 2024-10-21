<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateStudentCost
{
    public function updatePayment($bean, $event, $arguments)
    {
        // Kiểm tra xem module hiện tại là "ECT_Class"
        if ($bean->module_name === 'ECT_Student') {
            // Lấy giá trị từ trường "course_payment" của bản ghi "ECT_Course" liên quan
            $relatedCourse = $bean->get_linked_beans('ect_class_ect_student', 'ECT_Class');
            if (!empty($relatedCourse)) {
                $coursePayment = $relatedCourse[0]->class_cost;

                // Gán giá trị vào trường "class_payment_c" của đối tượng "ECT_Class" hiện tại
                $bean->student_payment = $coursePayment;
            }
        }

    }
}


