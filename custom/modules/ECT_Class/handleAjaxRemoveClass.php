<?php
$result = ajaxRemoveStudentInClass();
echo $result;
die;

function ajaxRemoveStudentInClass() {
    // Xử lý xóa HV khỏi lớp
    // Lấy classId và danh sách students từ POST data
    $classId = $_POST['classId'];
    $selectedRemoveStudents = $_POST['students'];
    if (!empty($selectedRemoveStudents)) {
        // Chuỗi chứa danh sách học viên đã chọn, sẽ được sử dụng trong truy vấn SQL
        $selectedRemoveStudentsList = implode("','", $selectedRemoveStudents);

        // Thực hiện truy vấn SQL để xóa thông tin lớp cho danh sách học viên đã chọn
        $query = "UPDATE ect_student SET student_joinclassdate = 'NULL',student_payment = NULL, class_id = '' WHERE id IN ('$selectedRemoveStudentsList')";

        // Thực hiện truy vấn và kiểm tra kết quả
        $result = $GLOBALS['db']->query($query);

        // Trả về kết quả cho JavaScript
        $response = array(
            'success' => $result, // true nếu xóa thành công, false nếu có lỗi xảy ra
            'message' => $result ? 'Xóa học viên thành công!' : 'Có lỗi xảy ra khi xóa học viên.'
        );

        return json_encode($response);
    } else {
        // Trả về kết quả cho JavaScript nếu danh sách học viên đã chọn rỗng
        $response = array(
            'success' => false,
            'message' => 'Chưa chọn học viên nào.'
        );

        // Trả về kết quả dưới dạng JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
