<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ECT_PaymentViewDetail extends ViewDetail
{
    public function display()
    {
        parent::display();

        // Xử lý yêu cầu AJAX khi người dùng bấm nút "Lưu"
        if ($_REQUEST['action'] === 'savePaymentTuition') {
            $this->handleAjaxPayment();
        }
    }

    private function handleAjaxPayment()
    {
        $paymentId = $_REQUEST['record'];
        $paymentTuition = $_POST['payment_tuition'];

        // Kiểm tra và xử lý dữ liệu đầu vào (nếu cần)
        // ...

        // Lưu giá trị số lượng tiền vào trường payment_tuition trong cơ sở dữ liệu
        $this->savePaymentTuitionToDatabase($paymentId, $paymentTuition);

        // Trả về phản hồi JSON nếu cần
        $response = array('success' => true);
        echo json_encode($response);
        exit();
    }

    private function savePaymentTuitionToDatabase($paymentId, $paymentTuition)
    {
        // Thực hiện truy vấn để cập nhật trường payment_tuition của bản ghi có paymentId tương ứng (thay thế bằng cơ chế truy vấn của SugarCRM)
        // Ví dụ:
         $query = "UPDATE ect_payment SET payment_tuition = $paymentTuition WHERE id = '$paymentId'";
         $GLOBALS['db']->query($query);

        // Đây chỉ là ví dụ, bạn cần thay thế bằng cơ chế truy vấn của SugarCRM để cập nhật cơ sở dữ liệu thực tế
    }
}


