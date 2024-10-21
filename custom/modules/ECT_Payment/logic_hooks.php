<?php

$hook_version = 1;
$hook_array = array();

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'ECT_Lecturer',
    'custom/modules/ECT_Payment/AssignPaymentID.php',
    'AssignPaymentID',
    'generateAndAssignCode'
);
$hook_array['before_save'][] = array(
    10,
    'ECT_Payment',
    'custom/modules/ECT_Payment/GetSetStudentPayment.php',
    'GetSetStudentPayment',
    'updatePaymentOwed'
);
$hook_array['before_save'][] = array(
    100,
    'ECT_Lecturer',
    'custom/modules/ECT_Payment/UpdateStartDatePayment.php',
    'UpdateStartDatePayment',
    'updatePayment'
);
$hook_array['before_save'][] = array(
    1000,
    'ECT_Lecturer',
    'custom/modules/ECT_Payment/UpdatePaymentOwed.php',
    'UpdatePaymentOwed',
    'updateNewPaymentOwed'
);