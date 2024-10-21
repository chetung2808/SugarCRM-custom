<?php
class ECT_ClassViewDetail extends ViewDetail
{
    public function display()
    {
        // Lấy danh sách tên học viên từ cơ sở dữ liệu
        $studentList = $this->getStudentList();
        $studentListt = $this->getStudentListt();
        $studentListtt = $this->removeStudentInClass();

        // Truyền danh sách học viên vào tpl 
        $this->ss->assign("studentList", $studentList);
        $this->ss->assign("classId", $this->bean->id);

        $this->ss->assign("studentListt", $studentListt);
        $this->ss->assign("classCost", $this->bean->class_cost);

        $this->ss->assign("studentListtt", $studentListtt);
        $this->ss->assign("classStartdate", $this->bean->class_startdate);

        parent::display();
    }

    // Hàm lấy danh sách tên học viên từ cơ sở dữ liệu
    private function getStudentList()
    {
        if ($this->bean->class_isfull === "Full") {
            return array();
        }
        // Lấy studentcourse hiện tại từ biến $GLOBALS['currentRecord']['classcourse']
        $classCourse = $this->bean->class_course;
        $classStartDate = $this->bean->class_startdate;
        $classId = $this->bean->id;

        // Tính ngày bắt đầu và ngày kết thúc trong phạm vi 1 tuần
        $oneWeekLater = strtotime('+1 week', strtotime($classStartDate));
        $oneWeekLaterDate = date('Y-m-d H:i:s', $oneWeekLater);

        // Thực hiện truy vấn SQL để lấy danh sách học viên và thông tin khóa học từ cơ sở dữ liệu
        $query = "SELECT id, name, student_id, student_course, student_expectedday FROM ect_student WHERE class_id = '' AND student_expectedday >= '{$classStartDate}' AND student_expectedday <= '{$oneWeekLaterDate}'";

        // Thực hiện truy vấn và lấy kết quả
        $result = $GLOBALS['db']->query($query);

        // Duyệt qua kết quả truy vấn và tạo một mảng danh sách học viên và thông tin khóa học
        $studentList = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            if ($row['student_course'] == $classCourse) {
                $studentList[$row['id']]['primary_id'] = $row['id'];
                $studentList[$row['id']]['student_name'] = $row['name'];
                $studentList[$row['id']]['student_id'] = $row['id'];
                $studentList[$row['id']]['student_custom_id'] = $row['student_id'];
                $studentList[$row['id']]['student_expectedday'] = $row['student_expectedday'];
                $studentList[$row['id']]['student_course'] = $row['student_course'];
            }
        }

        return $studentList;
    }

    private function getStudentListt()
    {
        $classId = $this->bean->id;

        // Thực hiện truy vấn SQL để lấy danh sách học viên và thông tin khóa học từ cơ sở dữ liệu
        $query = "SELECT id, name, student_id, student_course, student_expectedday FROM ect_student WHERE class_id = '$classId'";

        // Thực hiện truy vấn và lấy kết quả
        $result = $GLOBALS['db']->query($query);

        // Duyệt qua kết quả truy vấn và tạo một mảng danh sách học viên và thông tin khóa học
        $studentListt = array();
        $numberOfStudents = 0; // Biến để đếm số học viên
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $studentListt[$row['id']]['primary_id'] = $row['id'];
            $studentListt[$row['id']]['student_name'] = $row['name'];
            $studentListt[$row['id']]['student_id'] = $row['id'];
            $studentListt[$row['id']]['student_custom_id'] = $row['student_id'];
            $studentListt[$row['id']]['student_expectedday'] = $row['student_expectedday'];
            $studentListt[$row['id']]['student_course'] = $row['student_course'];

            $numberOfStudents++;
        }
        $this->bean->class_numberofstudents = $numberOfStudents;
        $classMaxNumOfStudent = $this->bean->class_maxnumofstudent;
        if ($numberOfStudents >= $classMaxNumOfStudent) {
            $this->bean->class_isfull = "Full";
        }
        else {
            $this->bean->class_isfull = "NotFull";
        }

        $this->bean->save();
        return $studentListt;

    }


    private function removeStudentInClass() {
        // Lấy studentcourse hiện tại từ biến $GLOBALS['currentRecord']['classcourse']
        $classCourse = $this->bean->class_course;
        $classStartDate = $this->bean->class_startdate;
        $classId = $this->bean->id;

        // Thực hiện truy vấn SQL để lấy danh sách học viên và thông tin khóa học từ cơ sở dữ liệu
        $query = "SELECT id, name, student_id, student_course, student_expectedday FROM ect_student WHERE class_id = '$classId'";

        // Thực hiện truy vấn và lấy kết quả
        $result = $GLOBALS['db']->query($query);

        // Duyệt qua kết quả truy vấn và tạo một mảng danh sách học viên và thông tin khóa học
        $studentListtt = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $studentListtt[$row['id']]['primary_id'] = $row['id'];
            $studentListtt[$row['id']]['student_name'] = $row['name'];
            $studentListtt[$row['id']]['student_id'] = $row['id'];
            $studentListtt[$row['id']]['student_custom_id'] = $row['student_id'];
            $studentListtt[$row['id']]['student_expectedday'] = $row['student_expectedday'];
            $studentListtt[$row['id']]['student_course'] = $row['student_course'];

        }

        return $studentListtt;
    }


}
?>
