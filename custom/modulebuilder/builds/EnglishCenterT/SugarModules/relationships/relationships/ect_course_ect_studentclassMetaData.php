<?php
// created: 2023-07-17 09:53:08
$dictionary["ect_course_ect_studentclass"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ect_course_ect_studentclass' => 
    array (
      'lhs_module' => 'ECT_Course',
      'lhs_table' => 'ect_course',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_StudentClass',
      'rhs_table' => 'ect_studentclass',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_course_ect_studentclass_c',
      'join_key_lhs' => 'ect_course_ect_studentclassect_course_ida',
      'join_key_rhs' => 'ect_course_ect_studentclassect_studentclass_idb',
    ),
  ),
  'table' => 'ect_course_ect_studentclass_c',
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
      'name' => 'ect_course_ect_studentclassect_course_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_course_ect_studentclassect_studentclass_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_course_ect_studentclassspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_course_ect_studentclass_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_course_ect_studentclassect_course_ida',
        1 => 'ect_course_ect_studentclassect_studentclass_idb',
      ),
    ),
  ),
);