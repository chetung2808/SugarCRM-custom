<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AssignLecturerID
{
    public function generateAndAssignCode($bean, $event, $arguments)
    {
        if (empty($bean->lecturer_id)) {
            $this->createNewLecturerCode($bean);
        }
    }

    private function createNewLecturerCode($bean)
    {
        $course = $bean->ect_course_ect_lecturer_name;
        $expectedDate = $bean->lecture_joinday;

// Chuyển đổi định dạng ngày tháng
        $expectedDate = date('Y/m/d', strtotime($expectedDate));

// Lấy giá trị trường ID hiện tại
        $currentId = $bean->lecturer_id;

// Tách và lấy phần số của ID hiện tại
        $count = substr($currentId, -8);

// Kiểm tra xem giá trị ban đầu của biến đếm đã được lưu trữ trong trường dữ liệu tùy chỉnh chưa
        if (empty($bean->lecturer_count)) {
// Nếu không có giá trị ban đầu, gán giá trị ban đầu vào trường dữ liệu tùy chỉnh
            $bean->lecturer_count = $count ? $count : 1;
        } else {
// Nếu đã có giá trị ban đầu, sử dụng giá trị ban đầu từ trường dữ liệu tùy chỉnh
            $count = $bean->lecturer_count;
        }

// Tăng giá trị biến đếm lên 1 nếu có sự trùng hợp với $course và $expectedDate
        $duplicateCode = true;
        while ($duplicateCode) {
// Định dạng biến đếm thành chuỗi có 8 chữ số, bắt đầu từ 00000001
            $count = str_pad($count, 8, '0', STR_PAD_LEFT);

// Tạo mã học viên mới
            $lecturerCode = "GV - $expectedDate - $count";

// Kiểm tra xem mã học viên đã tồn tại hay chưa
            $duplicateCode = $this->isDuplicateCode($lecturerCode);

            if ($duplicateCode) {
// Nếu mã học viên đã tồn tại, tăng biến đếm lên 1 và tiếp tục kiểm tra
                $count++;
            } else {
// Nếu không có sự trùng hợp, thoát khỏi vòng lặp
                break;
            }
        }

// Gán mã học viên vào trường ID
        $bean->lecturer_id = $lecturerCode;

// Lưu giá trị biến đếm vào trường dữ liệu tùy chỉnh
        $bean->lecturer_count = $count;
        $bean->lecturer_course = $course;
    }

    private function isDuplicateCode($lecturerCode)
    {
// Thực hiện truy vấn kiểm tra xem mã học viên đã tồn tại hay chưa
// Đây chỉ là ví dụ, bạn cần thay thế bằng truy vấn cơ sở dữ liệu thực tế
        $query = "SELECT lecturer_id FROM ect_lecturer WHERE lecturer_id = '$lecturerCode'";

// Thực hiện truy vấn và kiểm tra kết quả
// Đây chỉ là ví dụ, bạn cần thay thế bằng phương thức truy vấn cơ sở dữ liệu thực tế của SugarCRM
        $result = $GLOBALS['db']->query($query);
        $numRows = $GLOBALS['db']->getRowCount($result);

        return $numRows > 0;
    }
}
