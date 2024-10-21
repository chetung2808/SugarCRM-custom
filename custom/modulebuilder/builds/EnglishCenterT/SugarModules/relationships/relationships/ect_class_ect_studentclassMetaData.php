<?php
// created: 2023-07-17 09:53:07
$dictionary["ect_class_ect_studentclass"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ect_class_ect_studentclass' => 
    array (
      'lhs_module' => 'ECT_Class',
      'lhs_table' => 'ect_class',
      'lhs_key' => 'id',
      'rhs_module' => 'ECT_StudentClass',
      'rhs_table' => 'ect_studentclass',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ect_class_ect_studentclass_c',
      'join_key_lhs' => 'ect_class_ect_studentclassect_class_ida',
      'join_key_rhs' => 'ect_class_ect_studentclassect_studentclass_idb',
    ),
  ),
  'table' => 'ect_class_ect_studentclass_c',
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
      'name' => 'ect_class_ect_studentclassect_class_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ect_class_ect_studentclassect_studentclass_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ect_class_ect_studentclassspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ect_class_ect_studentclass_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ect_class_ect_studentclassect_class_ida',
        1 => 'ect_class_ect_studentclassect_studentclass_idb',
      ),
    ),
  ),
);