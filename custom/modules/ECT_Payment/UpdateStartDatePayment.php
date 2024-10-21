<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateStartDatePayment
{
    public function updatePayment($bean, $event, $arguments)
    {

// Kiểm tra xem module hiện tại là "ECT_Payment"
        if($bean->module_name === 'ECT_Payment')
        {
            $relatedStudent = $bean->get_linked_beans('student_link', 'ECT_Student');
            if(!empty($relatedStudent))
            {
                $studentDay = $relatedStudent[0]->student_joinclassdate;
                $paymentStart = strtotime('+1 day', strtotime($studentDay));
                $paymentStart = date('Y-m-d', $paymentStart);
                $paymentDeadline = strtotime('+1 month', strtotime($studentDay));
                $paymentDeadline = date('Y-m-d', $paymentDeadline);

                $bean->payment_deadline = $paymentDeadline;
                $bean->payment_startdate = $paymentStart;
            }
        }
    }

}

