<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CheckClassIsStart
{
    public function checkStatus($bean, $event, $arguments)
    {
        $currentDate = date('Y-m-d');
        $startDate = $bean->class_startdate;
        $endDate = $bean->class_enddate;
        $status = $bean->class_isstart;
        if ($currentDate < $startDate) {
            $status = 'Waiting';
            // Nếu ngày bắt đầu đã tới, chuyển trạng thái sang "Istart"
            $bean->class_isstart = $status;
        }
        if ($currentDate >= $startDate) {
            $status = 'Started';
            // Nếu ngày bắt đầu đã tới, chuyển trạng thái sang "Istart"
            $bean->class_isstart = $status;
        }

        if ($currentDate > $endDate) {
            $status = 'Done';
            // Nếu đã qua ngày kết thúc, chuyển trạng thái sang "Done"
            $bean->class_isstart = $status;
        }
    }
}
