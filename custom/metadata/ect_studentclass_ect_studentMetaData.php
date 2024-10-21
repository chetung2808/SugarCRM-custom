<?php
// created: 2023-07-17 09:58:46
$dictionary["ect_studentclass_ect_student"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ect_studentclass_ect_student' => 
    array (
      'lhs_module' => 'ECT_StudentClass',
      'lhs_table' => 'ect_studentclass',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_Student',
      'rhs_table' => 'ect_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_studentclass_ect_student_c',
      'join_key_lhs' => 'ect_studentclass_ect_studentect_studentclass_ida',
      'join_key_rhs' => 'ect_studentclass_ect_studentect_student_idb',
    ),
  ),
  'table' => 'ect_studentclass_ect_student_c',
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
      'name' => 'ect_studentclass_ect_studentect_studentclass_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_studentclass_ect_studentect_student_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_studentclass_ect_studentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_studentclass_ect_student_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ect_studentclass_ect_studentect_studentclass_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ect_studentclass_ect_student_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_studentclass_ect_studentect_student_idb',
      ),
    ),
  ),
);