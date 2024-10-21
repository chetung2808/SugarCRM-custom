<?php

$hook_version = 1;

$hook_array = array();

$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1,
    'ECT_Course',
    'custom/modules/ECT_Course/AssignCourseID.php',
    'AssignCourseID',
    'generateAndAssignCode'
);


