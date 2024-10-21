<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetSetStudentPayment
{
public function updatePaymentOwed($bean, $event, $arguments)
{
// Kiểm tra xem module hiện tại là "ECT_Payment"
if ($bean->module_name === 'ECT_Payment') {
$relatedStudent = $bean->get_linked_beans('student_link', 'ECT_Student');
if (!empty($relatedStudent)) {
$studentPayment = $relatedStudent[0]->student_payment;
$bean->payment_owed = $studentPayment;
}
}
}
}
