<?php
$result = ajaxAddClass();
echo $result;
die;

function ajaxAddClass()
{
    $lecturerId = $_POST['lecturerId'];

    $selectedClass = $_POST['class'];
    if (!empty($selectedClass)) {
        $selectedClassList = implode("','", $selectedClass);
        $query = "UPDATE ect_class SET lecturer_id = '$lecturerId' WHERE id IN ('$selectedClassList')";

        // Thực hiện truy vấn và kiểm tra kết quả
        $result = $GLOBALS['db']->query($query);

        // Trả về kết quả cho JavaScript
        $response = array(
            'success' => $result, // true nếu thêm thành công, false nếu có lỗi xảy ra
            'message' => $result ? 'Thêm lớp học thành công!' : 'Có lỗi xảy ra khi thêm lớp học.'
        );


        return json_encode($response);
    } else {
        // Trả về kết quả cho JavaScript nếu danh sách học viên đã chọn rỗng
        $response = array(
            'success' => false,
            'message' => 'Chưa chọn lớp học nào.'
        );

        // Trả về kết quả dưới dạng JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }

}