<?php
// created: 2023-07-26 06:25:06
$dictionary["ect_lecturer_ect_course"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ect_lecturer_ect_course' => 
    array (
      'lhs_module' => 'ECT_Lecturer',
      'lhs_table' => 'ect_lecturer',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_Course',
      'rhs_table' => 'ect_course',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_lecturer_ect_course_c',
      'join_key_lhs' => 'ect_lecturer_ect_courseect_lecturer_ida',
      'join_key_rhs' => 'ect_lecturer_ect_courseect_course_idb',
    ),
  ),
  'table' => 'ect_lecturer_ect_course_c',
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
      'name' => 'ect_lecturer_ect_courseect_lecturer_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_lecturer_ect_courseect_course_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_lecturer_ect_coursespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_lecturer_ect_course_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ect_lecturer_ect_courseect_lecturer_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ect_lecturer_ect_course_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_lecturer_ect_courseect_course_idb',
      ),
    ),
  ),
);