<?php
class AccountsViewEdit extends ViewEdit
{
    public function display()
    {
        // Lấy danh sách học viên từ cơ sở dữ liệu
        $studentList = $this->getStudentList();

        // Truyền danh sách học viên vào tpl
        $this->ss->assign("studentList", $studentList);

        parent::display();
    }

    // Hàm lấy danh sách học viên từ cơ sở dữ liệu
    private function getStudentList()
    {
        // Thực hiện truy vấn SQL để lấy danh sách học viên từ cơ sở dữ liệu
        $query = "SELECT id, name FROM ect_student"; // Thay thế "students" bằng tên bảng chứa thông tin học viên trong cơ sở dữ liệu của bạn

        // Thực hiện truy vấn và lấy kết quả
        $result = $GLOBALS['db']->query($query);

        // Duyệt qua kết quả truy vấn và tạo một mảng danh sách học viên
        $studentList = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $studentList[] = $row;
        }

        return $studentList;
    }
}
