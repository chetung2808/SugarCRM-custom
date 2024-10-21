<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateJoinClass
{
    public function updateDate($bean, $event, $arguments)
    {
        // Kiểm tra xem module hiện tại là "ECT_Student"
        if ($bean->module_name === 'ECT_Student') {
            $classId = $bean->class_id;

            // Thực hiện truy vấn SQL để lấy thông tin từ bảng ect_class
            $query = "SELECT class_cost, class_startdate FROM ect_class WHERE id = '$classId'";
            $result = $GLOBALS['db']->query($query);
            $classInfo = $GLOBALS['db']->fetchByAssoc($result);

            if ($classInfo) {
                // Gán giá trị class_startdate và class_cost vào các trường tương ứng của bảng ect_student
                $bean->student_joinclassdate = $classInfo['class_startdate'];
                $bean->student_payment = $classInfo['class_cost'];
            }
        }
    }


}
