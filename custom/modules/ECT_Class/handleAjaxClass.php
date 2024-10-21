<?php
$result = ajaxAddStudentToClass();
echo $result;
die;

function ajaxAddStudentToClass() {
    // Xử lý thêm HV vào lớp
    // Lấy classId và danh sách students từ POST data
    $classId = $_POST['classId'];
    $classCost = $_POST['classCost'];
    $classStartdate = $_POST['classStartdate'];

    $selectedStudents = $_POST['students'];
    if (!empty($selectedStudents)) {
        // Chuỗi chứa danh sách học viên đã chọn, sẽ được sử dụng trong truy vấn SQL
        $selectedStudentsList = implode("','", $selectedStudents);

        // Thực hiện truy vấn SQL để cập nhật thông tin lớp cho danh sách học viên đã chọn
        $query = "UPDATE ect_student SET student_joinclassdate = '$classStartdate',student_payment = '$classCost', class_id = '$classId' WHERE id IN ('$selectedStudentsList')";

        // Thực hiện truy vấn và kiểm tra kết quả
        $result = $GLOBALS['db']->query($query);

        // Trả về kết quả cho JavaScript
        $response = array(
            'success' => $result, // true nếu thêm thành công, false nếu có lỗi xảy ra
            'message' => $result ? 'Thêm học viên thành công!' : 'Có lỗi xảy ra khi thêm học viên.'
        );


        return json_encode($response);
    }
    else {
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