<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-07-26 06:25:05
$dictionary["ECT_Course"]["fields"]["ect_course_ect_class"] = array (
  'name' => 'ect_course_ect_class',
  'type' => 'link',
  'relationship' => 'ect_course_ect_class',
  'source' => 'non-db',
  'module' => 'ECT_Class',
  'bean_name' => 'ECT_Class',
  'side' => 'right',
  'vname' => 'LBL_ECT_COURSE_ECT_CLASS_FROM_ECT_CLASS_TITLE',
);


// created: 2023-07-26 06:25:05
$dictionary["ECT_Course"]["fields"]["ect_course_ect_lecturer"] = array (
  'name' => 'ect_course_ect_lecturer',
  'type' => 'link',
  'relationship' => 'ect_course_ect_lecturer',
  'source' => 'non-db',
  'module' => 'ECT_Lecturer',
  'bean_name' => 'ECT_Lecturer',
  'side' => 'right',
  'vname' => 'LBL_ECT_COURSE_ECT_LECTURER_FROM_ECT_LECTURER_TITLE',
);


// created: 2023-07-26 06:25:05
$dictionary["ECT_Course"]["fields"]["ect_course_ect_student"] = array (
  'name' => 'ect_course_ect_student',
  'type' => 'link',
  'relationship' => 'ect_course_ect_student',
  'source' => 'non-db',
  'module' => 'ECT_Student',
  'bean_name' => 'ECT_Student',
  'side' => 'right',
  'vname' => 'LBL_ECT_COURSE_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
);


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


// created: 2023-07-17 09:58:46
$dictionary["ECT_Course"]["fields"]["ect_studentclass_ect_course"] = array (
  'name' => 'ect_studentclass_ect_course',
  'type' => 'link',
  'relationship' => 'ect_studentclass_ect_course',
  'source' => 'non-db',
  'module' => 'ECT_StudentClass',
  'bean_name' => 'ECT_StudentClass',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_COURSE_FROM_ECT_STUDENTCLASS_TITLE',
  'id_name' => 'ect_studentclass_ect_courseect_studentclass_ida',
);
$dictionary["ECT_Course"]["fields"]["ect_studentclass_ect_course_name"] = array (
  'name' => 'ect_studentclass_ect_course_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_COURSE_FROM_ECT_STUDENTCLASS_TITLE',
  'save' => true,
  'id_name' => 'ect_studentclass_ect_courseect_studentclass_ida',
  'link' => 'ect_studentclass_ect_course',
  'table' => 'ect_studentclass',
  'module' => 'ECT_StudentClass',
  'rname' => 'name',
);
$dictionary["ECT_Course"]["fields"]["ect_studentclass_ect_courseect_studentclass_ida"] = array (
  'name' => 'ect_studentclass_ect_courseect_studentclass_ida',
  'type' => 'link',
  'relationship' => 'ect_studentclass_ect_course',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECT_STUDENTCLASS_ECT_COURSE_FROM_ECT_COURSE_TITLE',
);


 // created: 2023-07-17 09:16:24

 

$dictionary["ECT_Course"]["relationships"]["course_student"] = array (
    'lhs_module' => 'ECT_Course',
    'lhs_table' => 'ECT_Course',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
    'rhs_key' => 'course_id',
    'no_default' => false,
    'relationship_type' => 'one-to-many'
);
?>