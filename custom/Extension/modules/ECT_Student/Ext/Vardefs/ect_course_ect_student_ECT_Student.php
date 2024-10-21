<?php
// created: 2023-07-26 06:25:05
$dictionary["ECT_Student"]["fields"]["ect_course_ect_student"] = array (
  'name' => 'ect_course_ect_student',
  'type' => 'link',
  'relationship' => 'ect_course_ect_student',
  'source' => 'non-db',
  'module' => 'ECT_Course',
  'bean_name' => 'ECT_Course',
  'vname' => 'LBL_ECT_COURSE_ECT_STUDENT_FROM_ECT_COURSE_TITLE',
  'id_name' => 'ect_course_ect_studentect_course_ida',
);
$dictionary["ECT_Student"]["fields"]["ect_course_ect_student_name"] = array (
  'name' => 'ect_course_ect_student_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_COURSE_ECT_STUDENT_FROM_ECT_COURSE_TITLE',
  'save' => true,
  'id_name' => 'ect_course_ect_studentect_course_ida',
  'link' => 'ect_course_ect_student',
  'table' => 'ect_course',
  'module' => 'ECT_Course',
  'rname' => 'name',
);
$dictionary["ECT_Student"]["fields"]["ect_course_ect_studentect_course_ida"] = array (
  'name' => 'ect_course_ect_studentect_course_ida',
  'type' => 'link',
  'relationship' => 'ect_course_ect_student',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_COURSE_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
);
