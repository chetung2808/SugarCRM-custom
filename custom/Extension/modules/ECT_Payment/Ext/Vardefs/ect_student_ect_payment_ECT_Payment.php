<?php
// created: 2023-07-26 06:25:06
$dictionary["ECT_Payment"]["fields"]["ect_student_ect_payment"] = array (
  'name' => 'ect_student_ect_payment',
  'type' => 'link',
  'relationship' => 'ect_student_ect_payment',
  'source' => 'non-db',
  'module' => 'ECT_Student',
  'bean_name' => 'ECT_Student',
  'vname' => 'LBL_ECT_STUDENT_ECT_PAYMENT_FROM_ECT_STUDENT_TITLE',
  'id_name' => 'ect_student_ect_paymentect_student_ida',
);
$dictionary["ECT_Payment"]["fields"]["ect_student_ect_payment_name"] = array (
  'name' => 'ect_student_ect_payment_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_STUDENT_ECT_PAYMENT_FROM_ECT_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'ect_student_ect_paymentect_student_ida',
  'link' => 'ect_student_ect_payment',
  'table' => 'ect_student',
  'module' => 'ECT_Student',
  'rname' => 'name',
);
$dictionary["ECT_Payment"]["fields"]["ect_student_ect_paymentect_student_ida"] = array (
  'name' => 'ect_student_ect_paymentect_student_ida',
  'type' => 'link',
  'relationship' => 'ect_student_ect_payment',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_STUDENT_ECT_PAYMENT_FROM_ECT_PAYMENT_TITLE',
);
