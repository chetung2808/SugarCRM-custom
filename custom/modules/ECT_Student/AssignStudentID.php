<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AssignStudentID
{
    public function generateAndAssignCode($bean, $event, $arguments)
    {
        if (empty($bean->student_id)) {
            $this->createNewStudentCode($bean);
        }
    }

    private function createNewStudentCode($bean)
    {
        $expectedDate = $bean->student_expectedday;
        $expectedDate = date('Y/m/d', strtotime($expectedDate));

        $currentId = $bean->student_id;

        $count = substr($currentId, -8);
        if (empty($bean->student_count)) {

            $bean->student_count = $count ? $count : 1;
        } else {
            $count = $bean->student_count;
        }

        $duplicateCode = true;
        while ($duplicateCode) {
            $count = str_pad($count, 8, '0', STR_PAD_LEFT);

            $studentCode = "HV - $expectedDate - $count";

            $duplicateCode = $this->isDuplicateCode($studentCode);

            if ($duplicateCode) {
                $count++; 
            } else {
                break;
            }
        }

        $bean->student_id = $studentCode;
        $bean->student_count = $count;


    }

    private function isDuplicateCode($studentCode)
    {
        $query = "SELECT student_id FROM ect_student WHERE student_id = '$studentCode'";

// Thực hiện truy vấn và kiểm tra kết quả
// Đây chỉ là ví dụ, bạn cần thay thế bằng phương thức truy vấn cơ sở dữ liệu thực tế của SugarCRM
        $result = $GLOBALS['db']->query($query);
        $numRows = $GLOBALS['db']->getRowCount($result);

        return $numRows > 0;
    }
}
