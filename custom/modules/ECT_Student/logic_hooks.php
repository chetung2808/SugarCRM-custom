<?php


$hook_version = 1;

$hook_array = array();

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'ECT_Lecturer',
    'custom/modules/ECT_Student/AssignStudentID.php',
    'AssignStudentID',
    'generateAndAssignCode'
);

$hook_array['before_save'][] = array(
    10,
    'UpdateClassPayment',
    'custom/modules/ECT_Student/UpdateStudentCost.php',
    'UpdateStudentCost',
    'updatePayment'
);
$hook_array['before_save'][] = array(
    100,
    'UpdateStudentCourse',
    'custom/modules/ECT_Student/UpdateCourseChoose.php',
    'UpdateCourseChoose',
    'updateCourse'
);

