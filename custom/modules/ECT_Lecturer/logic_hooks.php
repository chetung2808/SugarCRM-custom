<?php


$hook_version = 1;

$hook_array = array();

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'ECT_Lecturer',
    'custom/modules/ECT_Lecturer/AssignLecturerID.php',
    'AssignLecturerID',
    'generateAndAssignCode'
);


