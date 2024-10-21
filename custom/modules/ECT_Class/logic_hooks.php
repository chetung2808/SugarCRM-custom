<?php

$hook_version = 1;

$hook_array = array();

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'ECT_Class',
    'custom/modules/ECT_Class/AssignClassID.php',
    'AssignClassID',
    'generateAndAssignCode'
);
$hook_array['before_save'][] = array(
    10,
    'UpdateClassPayment',
    'custom/modules/ECT_Class/UpdateClassPayment.php',
    'UpdateClassPayment',
    'updatePayment'
);
$hook_array['before_save'][] = array(
    100,
    'UpdateClassPayment',
    'custom/modules/ECT_Class/CheckClassIsFull.php',
    'CheckClassIsFull',
    'checkStatus'
);

$hook_array['before_save'][] = array(
    1000,
    'UpdateClassPayment',
    'custom/modules/ECT_Class/CheckClassIsStart.php',
    'CheckClassIsStart',
    'checkStatus'
);
$hook_array['before_save'][] = array(
    10000,
    'UpdateClassPayment',
    'custom/modules/ECT_Class/UpdateEndDateClass.php',
    'UpdateEndDateClass',
    'updateDate'
);


