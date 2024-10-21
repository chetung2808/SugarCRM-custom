<?php

require_once 'include/MVC/View/views/view.detail.php';

class CustomECT_ClassDetailView extends ViewDetail
{
    public function display()
    {
        parent::display();

        // Hiển thị subpanel danh sách học viên
        $this->displayClassStudentSubpanel();
    }

    // Hàm hiển thị subpanel danh sách học viên
    private function displayClassStudentSubpanel()
    {
        // Lấy danh sách học viên từ subpanel
        $studentListInClass = $this->getSubpanelData();

        // Truyền danh sách học viên vào tpl
        $this->ss->assign("studentListInClass", $studentListInClass);

        // Hiển thị template của subpanel
        $this->ss->display('modules/ECT_Class/tpls/editliststudent.tpl');
    }

    // Hàm lấy dữ liệu danh sách học viên từ relationship "class_student"
    private function getSubpanelData()
    {
        $classBean = $this->bean;
        $studentListInClass = array();

        if ($classBean->load_relationship('class_student')) {
            $relatedStudents = $classBean->class_student->getBeans();
            foreach ($relatedStudents as $student) {
                // Tùy chỉnh dữ liệu học viên theo yêu cầu của bạn và thêm vào mảng $studentListInClass
                $studentData = array(
                    'name' => $student->name,
                    'student_id' => $student->student_id,
                    'student_course' => $student->student_course,
                    'student_expectedday' => $student->student_expectedday,
                );
                $studentListInClass[] = $studentData;
            }
        }

        return $studentListInClass;
    }
}

