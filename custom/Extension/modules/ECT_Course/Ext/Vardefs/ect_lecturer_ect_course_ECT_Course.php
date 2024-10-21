<?php
// created: 2023-07-26 06:25:06
$dictionary["ECT_Course"]["fields"]["ect_lecturer_ect_course"] = array (
  'name' => 'ect_lecturer_ect_course',
  'type' => 'link',
  'relationship' => 'ect_lecturer_ect_course',
  'source' => 'non-db',
  'module' => 'ECT_Lecturer',
  'bean_name' => 'ECT_Lecturer',
  'vname' => 'LBL_ECT_LECTURER_ECT_COURSE_FROM_ECT_LECTURER_TITLE',
  'id_name' => 'ect_lecturer_ect_courseect_lecturer_ida',
);
$dictionary["ECT_Course"]["fields"]["ect_lecturer_ect_course_name"] = array (
  'name' => 'ect_lecturer_ect_course_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_LECTURER_ECT_COURSE_FROM_ECT_LECTURER_TITLE',
  'save' => true,
  'id_name' => 'ect_lecturer_ect_courseect_lecturer_ida',
  'link' => 'ect_lecturer_ect_course',
  'table' => 'ect_lecturer',
  'module' => 'ECT_Lecturer',
  'rname' => 'name',
);
$dictionary["ECT_Course"]["fields"]["ect_lecturer_ect_courseect_lecturer_ida"] = array (
  'name' => 'ect_lecturer_ect_courseect_lecturer_ida',
  'type' => 'link',
  'relationship' => 'ect_lecturer_ect_course',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_LECTURER_ECT_COURSE_FROM_ECT_COURSE_TITLE',
);
