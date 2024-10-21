<?php
$result = ajaxStudentPayment();
echo $result;
die;

function ajaxStudentPayment() {
    // Xử lý thêm HV vào lớp
    // Lấy classId và danh sách students từ POST data
    $studentId = $_POST['studentId'];
    $studentCost = $_POST['studentCost'];
    $studentStartdate = $_POST['studentStartdate'];

    $selectedStudents = $_POST['students'];
    if (!empty($selectedStudents)) {
        // Chuỗi chứa danh sách học viên đã chọn, sẽ được sử dụng trong truy vấn SQL
        $selectedStudentsList = implode("','", $selectedStudents);

        // Thực hiện truy vấn SQL để cập nhật thông tin lớp cho danh sách học viên đã chọn
        $query = "UPDATE ect_payment SET student_joinclassdate = '$studentStartdate',student_payment = '$studentCost', class_id = '$studentId'";

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