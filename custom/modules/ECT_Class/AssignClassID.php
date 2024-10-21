<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AssignClassID
{
    public function generateAndAssignCode($bean, $event, $arguments)
    {
        if (empty($bean->name)) {
// Chỉ tạo mã học viên mới khi lớp học được tạo lần đầu tiên, chưa có mã học viên
            $this->createNewClassCode($bean);
        }
    }

    private function createNewClassCode($bean)
    {
        $course = $bean->ect_course_ect_class_name; 
        $expectedDate = $bean->class_startdate;
        $expectedDate = date('Y/m/d', strtotime($expectedDate));

        $currentId = $bean->name;

        $count = substr($currentId, -8);

        if (empty($bean->class_count)) {
            $bean->class_count = $count ? $count : 1;
        } else {
            $count = $bean->class_count;
        }

// Tăng giá trị biến đếm lên 1 nếu có sự trùng hợp với $course và $expectedDate
        $duplicateCode = true;
        while ($duplicateCode) {
            $count = str_pad($count, 8, '0', STR_PAD_LEFT);

            $classCode = "LH - $course - $expectedDate - $count";

            $duplicateCode = $this->isDuplicateCode($classCode);

            if ($duplicateCode) {
                $count++;
            } else {
                break;
            }
        }

        $bean->name = $classCode;
        $bean->class_count = $count;
        $bean->class_course = $course;
    }

    private function isDuplicateCode($classCode)
    {
        $query = "SELECT name FROM ect_class WHERE name = '$classCode'";

// Thực hiện truy vấn và kiểm tra kết quả
// Đây chỉ là ví dụ, bạn cần thay thế bằng phương thức truy vấn cơ sở dữ liệu thực tế của SugarCRM
        $result = $GLOBALS['db']->query($query);
        $numRows = $GLOBALS['db']->getRowCount($result);

        return $numRows > 0;
    }
}
