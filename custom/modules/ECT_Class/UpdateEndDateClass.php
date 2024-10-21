<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateEndDateClass
{
public function updateDate($bean, $event, $arguments)
{
// Kiểm tra xem module hiện tại là "ECT_Class"
if ($bean->module_name === 'ECT_Class') {
// Lấy giá trị từ trường "course_payment" của bản ghi "ECT_Course" liên quan
$relatedCourse = $bean->get_linked_beans('ect_course_ect_class', 'ECT_Course');
if (!empty($relatedCourse)) {
$courseExtendedtime = $relatedCourse[0]->course_extendedtime;
$startDate = $bean->class_startdate;
if ($courseExtendedtime > 1) {
$classEndDate = strtotime('+' . $courseExtendedtime . ' months', strtotime($startDate));
} else {
$classEndDate = strtotime('+' . $courseExtendedtime . ' month', strtotime($startDate));
}

// Gán giá trị vào trường "class_enddate" của đối tượng "ECT_Class" hiện tại
$bean->class_enddate = date('Y-m-d', $classEndDate);
}
}
}
}
