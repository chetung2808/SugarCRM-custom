<?php

class ECT_StudentViewDetail extends ViewDetail
{
    public function display() {
        $paymentList = $this->getPaymentList();

        $this->ss->assign("paymentList", $paymentList);
        $this->ss->assign("studentId", $this->bean->id);

        parent::display();
    }

    private function getPaymentList() {
        $studentId = $this->bean->id;
        $query = "SELECT id, name, payment_status, payment_tuition, payment_owed, payment_startdate, payment_deadline, payment_total FROM ect_payment WHERE student_id = '$studentId'";

        $result = $GLOBALS['db']->query($query);

        $paymentList = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
                $paymentList[$row['id']]['primary_id'] = $row['id'];
                $paymentList[$row['id']]['name'] = $row['name'];
                $paymentList[$row['id']]['payment_status'] = $row['payment_status'];
                $paymentList[$row['id']]['payment_tuition'] = $row['payment_tuition'];
                $paymentList[$row['id']]['payment_id'] = $row['id'];
                $paymentList[$row['id']]['payment_owed'] = $row['payment_owed'];
                $paymentList[$row['id']]['payment_startdate'] = $row['payment_startdate'];
                $paymentList[$row['id']]['payment_deadline'] = $row['payment_deadline'];
                $paymentList[$row['id']]['payment_total'] = $row['payment_total'];
                $paymentList[$row['id']]['payment_owed_rn'] = $row['payment_owed'] - $row['payment_total'];
        }
        return $paymentList;
    }

}

