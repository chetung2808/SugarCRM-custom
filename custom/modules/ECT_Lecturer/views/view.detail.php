<?php

class ECT_LecturerViewDetail extends ViewDetail
{
    public function display()
    {
        // Lấy danh sách tên học viên từ cơ sở dữ liệu
        $classList = $this->getClassList();
        $this->ss->assign("classList", $classList);
        $this->ss->assign("lecturerId", $this->bean->id);

        parent::display();
    }

    private function getClassList() {
//        $lecturerId = $this->bean->id;
        $lecturerCourse = $this->bean->lecturer_course;
        $query = "SELECT id, name, class_startdate, class_enddate, lecturer_id, class_course, class_numberofstudents FROM ect_class WHERE lecturer_id = '' AND class_course = '$lecturerCourse'";

        $result = $GLOBALS['db']->query($query);

        $classList = array();
        while($row = $GLOBALS['db']->fetchByAssoc($result)) {

                $classList[$row['id']]['primary_id'] = $row['id'];
                $classList[$row['id']]['class_id'] = $row['id'];
                $classList[$row['id']]['class_name'] = $row['name'];
                $classList[$row['id']]['class_startdate'] = $row['class_startdate'];
                $classList[$row['id']]['class_enddate'] = $row['class_enddate'];
                $classList[$row['id']]['lecturer_id'] = $row['lecturer_id'];
                $classList[$row['id']]['class_course'] = $row['class_course'];
                $classList[$row['id']]['class_numberofstudents'] = $row['class_numberofstudents'];


        }

        return $classList;
    }
}