<?php
// created: 2023-07-26 06:25:05
$dictionary["ECT_Class"]["fields"]["ect_course_ect_class"] = array (
  'name' => 'ect_course_ect_class',
  'type' => 'link',
  'relationship' => 'ect_course_ect_class',
  'source' => 'non-db',
  'module' => 'ECT_Course',
  'bean_name' => 'ECT_Course',
  'vname' => 'LBL_ECT_COURSE_ECT_CLASS_FROM_ECT_COURSE_TITLE',
  'id_name' => 'ect_course_ect_classect_course_ida',
);
$dictionary["ECT_Class"]["fields"]["ect_course_ect_class_name"] = array (
  'name' => 'ect_course_ect_class_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_COURSE_ECT_CLASS_FROM_ECT_COURSE_TITLE',
  'save' => true,
  'id_name' => 'ect_course_ect_classect_course_ida',
  'link' => 'ect_course_ect_class',
  'table' => 'ect_course',
  'module' => 'ECT_Course',
  'rname' => 'name',
);
$dictionary["ECT_Class"]["fields"]["ect_course_ect_classect_course_ida"] = array (
  'name' => 'ect_course_ect_classect_course_ida',
  'type' => 'link',
  'relationship' => 'ect_course_ect_class',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_COURSE_ECT_CLASS_FROM_ECT_CLASS_TITLE',
);
