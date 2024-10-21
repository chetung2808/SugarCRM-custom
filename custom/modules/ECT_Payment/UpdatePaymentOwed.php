<?php

class UpdatePaymentOwed
{
    public function updateNewPaymentOwed($bean, $event, $arguments)
    {
        // Kiểm tra xem module hiện tại là "ECT_Payment"
        if ($bean->module_name === 'ECT_Payment') {
            $paymentId = $bean->id;
            // Lấy giá trị hiện tại của payment_total từ cơ sở dữ liệu
            $query = "SELECT payment_total, payment_tuition FROM ect_payment WHERE id = '{$paymentId}'";
            $result = $GLOBALS['db']->query($query);
            if ($result && $GLOBALS['db']->getRowCount($result) > 0) {
                $row = $GLOBALS['db']->fetchByAssoc($result);
                $currentPayment = $row['payment_total'];
                // Lấy giá trị hiện tại của payment_paytuition
                $currentTotalPayment = $row['payment_tuition'];
                $newPayment = ($currentPayment + $currentTotalPayment);
                $bean->payment_total = $newPayment;
            }

        }
    }
}
