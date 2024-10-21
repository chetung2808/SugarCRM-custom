<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AssignPaymentID
{
    public function generateAndAssignCode($bean, $event, $arguments)
    {
        if (empty($bean->name)) {
            $this->createNewPaymentCode($bean);
        }
    }

    private function createNewPaymentCode($bean)
    {
        $currentId = $bean->name;
        $count = substr($currentId, -8);
        if (empty($bean->payment_count)) {
            $bean->payment_count = $count ? $count : 1;
        } else {
            $count = $bean->payment_count;
        }
        $duplicateCode = true;
        while ($duplicateCode) {
            $count = str_pad($count, 8, '0', STR_PAD_LEFT);
            $paymentCode = "HD - $count";
            $duplicateCode = $this->isDuplicateCode($paymentCode);

            if ($duplicateCode) {
                $count++;
            } else {
                break;
            }
        }
        $bean->name = $paymentCode;
        $bean->payment_count = $count;

    }

    private function isDuplicateCode($paymentCode)
    {
// Thực hiện truy vấn kiểm tra xem mã học viên đã tồn tại hay chưa
// Đây chỉ là ví dụ, bạn cần thay thế bằng truy vấn cơ sở dữ liệu thực tế
        $query = "SELECT name FROM ect_payment WHERE name = '$paymentCode'";

// Thực hiện truy vấn và kiểm tra kết quả
// Đây chỉ là ví dụ, bạn cần thay thế bằng phương thức truy vấn cơ sở dữ liệu thực tế của SugarCRM
        $result = $GLOBALS['db']->query($query);
        $numRows = $GLOBALS['db']->getRowCount($result);

        return $numRows > 0;
    }
}
