a<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CheckClassIsFull
{
    public function checkStatus($bean, $event, $arguments)
    {
        $numOfStudents = $bean->class_numberofstudents;

        if ($numOfStudents >= $bean->class_maxnumofstudent) {
            $bean->class_isfull = 'Full';
            // Bạn có thể thực hiện các xử lý khác tại đây khi lớp học đã đầy.
            //}
        }
    }
}
