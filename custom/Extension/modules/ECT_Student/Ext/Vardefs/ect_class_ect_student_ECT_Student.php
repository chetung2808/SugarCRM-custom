<?php
// created: 2023-07-24 12:21:00
$dictionary["ECT_Student"]["fields"]["ect_class_ect_student"] = array (
  'name' => 'ect_class_ect_student',
  'type' => 'link',
  'relationship' => 'ect_class_ect_student',
  'source' => 'non-db',
  'module' => 'ECT_Class',
  'bean_name' => 'ECT_Class',
  'vname' => 'LBL_ECT_CLASS_ECT_STUDENT_FROM_ECT_CLASS_TITLE',
  'id_name' => 'ect_class_ect_studentect_class_ida',
);
$dictionary["ECT_Student"]["fields"]["ect_class_ect_student_name"] = array (
  'name' => 'ect_class_ect_student_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_CLASS_ECT_STUDENT_FROM_ECT_CLASS_TITLE',
  'save' => true,
  'id_name' => 'ect_class_ect_studentect_class_ida',
  'link' => 'ect_class_ect_student',
  'table' => 'ect_class',
  'module' => 'ECT_Class',
  'rname' => 'name',
);
$dictionary["ECT_Student"]["fields"]["ect_class_ect_studentect_class_ida"] = array (
  'name' => 'ect_class_ect_studentect_class_ida',
  'type' => 'link',
  'relationship' => 'ect_class_ect_student',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_CLASS_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
);
