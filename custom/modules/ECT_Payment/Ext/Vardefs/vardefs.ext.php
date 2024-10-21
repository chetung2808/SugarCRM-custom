<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['ECT_Payment']['fields']['payment_tragop'] = array(
    'name' => 'payment_tragop',
    'vname' => 'LBL_PAYMENT_TRAGOP',
    'type' => 'currency',
    'len' => '26,6',
    'default' => '0',
    'required' => false,
    'inline_edit' => '1',
    'studio' => 'visible',
);


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


$dictionary["ECT_Payment"]["fields"]["student_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'student_name',
    'vname'      => 'LBL_STUDENT_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'student_id',
    'join_name'  => 'ECT_Student',
    'link'       => 'student_link',
    'table'      => 'ect_student',
    'module'     => 'ECT_Student',
);

$dictionary["ECT_Payment"]["fields"]["student_id"] = array(
    'name'              => 'student_id',
    'rname'             => 'id',
    'vname'             => 'LBL_STUDENT_NAME',
    'type'              => 'id',
    'table'             => 'ect_student',
    'isnull'            => 'true',
    'module'            => 'ECT_Student',
    'dbType'            => 'id',
);

$dictionary["ECT_Payment"]["fields"]["student_link"] = array(
    'name'          => 'student_link',
    'type'          => 'link',
    'relationship'  => 'student_payment',
    'module'        => 'ECT_Student',
    'bean_name'     => 'ECT_Student',
    'source'        => 'non-db',
    'vname'         => 'LBL_STUDENT_NAME',
);
$dictionary["ECT_Payment"]["fields"]["student_name"]['required'] = false;
?>