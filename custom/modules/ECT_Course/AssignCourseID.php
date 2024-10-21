<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AssignCourseID
{
public function generateAndAssignCode($bean, $event, $arguments)
{
if (empty($bean->course_id)) {
// Chỉ tạo mã khóa học mới khi lớp học được tạo lần đầu tiên, chưa có mã khóa học
$this->createNewCourseCode($bean);

// Lưu giá trị vào cơ sở dữ liệu
$bean->save();
}
}

private function createNewCourseCode($bean)
{
$course = $bean->name;
$courseCode = "KH - $course";

// Gán mã khóa học vào trường "course_id"
$bean->course_id = $courseCode;
}
}
