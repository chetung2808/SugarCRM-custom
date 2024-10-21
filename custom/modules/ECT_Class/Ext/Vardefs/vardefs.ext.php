<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2023-07-14 06:00:42
$dictionary['ECT_Class']['fields']['class_isfull']['default']='NotFull';

 

 // created: 2023-07-14 06:16:06

 


$dictionary["ECT_Class"]["relationships"]["class_student"] = array (
    'lhs_module' => 'ECT_Class',
    'lhs_table' => 'ect_class',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
    'rhs_key' => 'class_id',
    'no_default' => false,
    'relationship_type' => 'one-to-many'
);


$layout_defs['ECT_Class']['subpanel_setup']['class_student'] = array(
    'order' => 100,
    'module' => 'ECT_Student',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_CLASS_STUDENT_SUBPANEL_TITLE',
    'get_subpanel_data' => 'function:get_class_student_subpanel_data', // Thay 'function:get_class_student_subpanel_data' bằng hàm lấy dữ liệu danh sách học viên của bạn.
    'top_buttons' => array(),
);


$dictionary["ECT_Class"]["fields"]["lecturer_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'lecturer_name',
    'vname'      => 'LBL_LECTURER_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'lecturer_id',
    'join_name'  => 'ECT_Lecturer',
    'link'       => 'class_link',
    'table'      => 'ect_lecturer',
    'module'     => 'ECT_Lecturer',
);
$dictionary["ECT_Class"]["fields"]["lecturer_id"] = array(
    'name'              => 'lecturer_id',
    'rname'             => 'id',
    'vname'             => 'LBL_LECTURER_NAME',
    'type'              => 'id',
    'table'             => 'ect_lecturer',
    'isnull'            => 'true',
    'module'            => 'ECT_Lecturer',
    'dbType'            => 'id',
);
$dictionary["ECT_Class"]["fields"]["lecturer_link"] = array(
    'name'          => 'lecturer_link',
    'type'          => 'link',
    'relationship'  => 'lecturer_class',
    'module'        => 'ECT_Lecturer',
    'bean_name'     => 'ECT_Lecturer',
    'source'        => 'non-db',
    'vname'         => 'LBL_LECTURER_NAME',
);
$dictionary["ECT_Class"]["fields"]["lecturer_name"]['required'] = false;
?>