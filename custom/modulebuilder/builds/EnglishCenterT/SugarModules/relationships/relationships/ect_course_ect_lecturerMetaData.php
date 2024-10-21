<?php
// created: 2023-07-26 06:25:05
$dictionary["ect_course_ect_lecturer"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ect_course_ect_lecturer' => 
    array (
      'lhs_module' => 'ECT_Course',
      'lhs_table' => 'ect_course',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_Lecturer',
      'rhs_table' => 'ect_lecturer',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_course_ect_lecturer_c',
      'join_key_lhs' => 'ect_course_ect_lecturerect_course_ida',
      'join_key_rhs' => 'ect_course_ect_lecturerect_lecturer_idb',
    ),
  ),
  'table' => 'ect_course_ect_lecturer_c',
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
      'name' => 'ect_course_ect_lecturerect_course_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_course_ect_lecturerect_lecturer_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_course_ect_lecturerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_course_ect_lecturer_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ect_course_ect_lecturerect_course_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ect_course_ect_lecturer_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_course_ect_lecturerect_lecturer_idb',
      ),
    ),
  ),
);