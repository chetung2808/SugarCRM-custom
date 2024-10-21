<?php
// created: 2023-07-17 09:58:46
$dictionary["ECT_Student"]["fields"]["ect_studentclass_ect_student"] = array (
  'name' => 'ect_studentclass_ect_student',
  'type' => 'link',
  'relationship' => 'ect_studentclass_ect_student',
  'source' => 'non-db',
  'module' => 'ECT_StudentClass',
  'bean_name' => 'ECT_StudentClass',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_STUDENT_FROM_ECT_STUDENTCLASS_TITLE',
  'id_name' => 'ect_studentclass_ect_studentect_studentclass_ida',
);
$dictionary["ECT_Student"]["fields"]["ect_studentclass_ect_student_name"] = array (
  'name' => 'ect_studentclass_ect_student_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_STUDENT_FROM_ECT_STUDENTCLASS_TITLE',
  'save' => true,
  'id_name' => 'ect_studentclass_ect_studentect_studentclass_ida',
  'link' => 'ect_studentclass_ect_student',
  'table' => 'ect_studentclass',
  'module' => 'ECT_StudentClass',
  'rname' => 'name',
);
$dictionary["ECT_Student"]["fields"]["ect_studentclass_ect_studentect_studentclass_ida"] = array (
  'name' => 'ect_studentclass_ect_studentect_studentclass_ida',
  'type' => 'link',
  'relationship' => 'ect_studentclass_ect_student',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
);
