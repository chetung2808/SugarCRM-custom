<?php
// created: 2023-07-26 06:25:06
$dictionary["ect_student_ect_payment"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ect_student_ect_payment' => 
    array (
      'lhs_module' => 'ECT_Student',
      'lhs_table' => 'ect_student',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_Payment',
      'rhs_table' => 'ect_payment',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_student_ect_payment_c',
      'join_key_lhs' => 'ect_student_ect_paymentect_student_ida',
      'join_key_rhs' => 'ect_student_ect_paymentect_payment_idb',
    ),
  ),
  'table' => 'ect_student_ect_payment_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ect_student_ect_paymentect_student_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_student_ect_paymentect_payment_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_student_ect_paymentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_student_ect_payment_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ect_student_ect_paymentect_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ect_student_ect_payment_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_student_ect_paymentect_payment_idb',
      ),
    ),
  ),
);