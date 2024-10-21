<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateClassPayment
{
    public function updatePayment($bean, $event, $arguments)
    {
        // Kiểm tra xem module hiện tại là "ECT_Class"
        if ($bean->module_name === 'ECT_Class') {
            // Lấy giá trị từ trường "course_payment" của bản ghi "ECT_Course" liên quan
            $relatedCourse = $bean->get_linked_beans('ect_course_ect_class', 'ECT_Course');
            if (!empty($relatedCourse)) {
                $coursePayment = $relatedCourse[0]->course_cost;

                // Gán giá trị vào trường "class_payment_c" của đối tượng "ECT_Class" hiện tại
                $bean->class_cost = $coursePayment;
            }
        }

    }
}


