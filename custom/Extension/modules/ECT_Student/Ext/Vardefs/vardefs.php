<?php
$dictionary["ECT_Student"]["fields"]["class_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'class_name',
    'vname'      => 'LBL_CLASS_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'class_id',
    'join_name'  => 'ECT_Class',
    'link'       => 'class_link',
    'table'      => 'ect_class',
    'module'     => 'ECT_Class',
);

$dictionary["ECT_Student"]["fields"]["class_id"] = array(
    'name'              => 'class_id',
    'rname'             => 'id',
    'vname'             => 'LBL_CLASS_NAME',
    'type'              => 'id',
    'table'             => 'ect_class',
    'isnull'            => 'true',
    'module'            => 'ECT_Class',
    'dbType'            => 'id',
);

$dictionary["ECT_Student"]["fields"]["class_link"] = array(
    'name'          => 'class_link',
    'type'          => 'link',
    'relationship'  => 'class_student',
    'module'        => 'ECT_Class',
    'bean_name'     => 'ECT_Class',
    'source'        => 'non-db',
    'vname'         => 'LBL_CLASS_NAME',
);

$dictionary["ECT_Student"]["fields"]["course_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'course_name',
    'vname'      => 'LBL_COURSE_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'course_id',
    'join_name'  => 'ECT_Course',
    'link'       => 'course_link',
    'table'      => 'ect_course',
    'module'     => 'ECT_Course',
);

$dictionary["ECT_Student"]["fields"]["course_id"] = array(
    'name'              => 'class_id',
    'rname'             => 'id',
    'vname'             => 'LBL_COURSE_NAME',
    'type'              => 'id',
    'table'             => 'ect_course',
    'isnull'            => 'true',
    'module'            => 'ECT_Course',
    'dbType'            => 'id',
);

$dictionary["ECT_Student"]["fields"]["course_link"] = array(
    'name'          => 'class_link',
    'type'          => 'link',
    'relationship'  => 'course_student',
    'module'        => 'ECT_Course',
    'bean_name'     => 'ECT_Course',
    'source'        => 'non-db',
    'vname'         => 'LBL_COURSE_NAME',
);

$dictionary["ECT_Student"]["fields"]["class_name"]['required'] = false;
$dictionary["ECT_Student"]["fields"]["course_name"]['required'] = false;

$dictionary["ECT_Student"]["relationships"]["student_payment"] = array (
    'lhs_module' => 'ECT_Student',
    'lhs_table' => 'ect_student',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Payment',
    'rhs_table' => 'ect_payment',
    'rhs_key' => 'student_id',
    'no_default' => false,
    'relationship_type' => 'one-to-many'
);
$layout_defs['ECT_Student']['subpanel_setup']['student_payment'] = array(
    'order' => 100,
    'module' => 'ECT_Payment',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_STUDENT_PAYMENT_SUBPANEL_TITLE',
    'get_subpanel_data' => 'function:get_student_payment_subpanel_data', // Thay 'function:get_class_student_subpanel_data' bằng hàm lấy dữ liệu danh sách học viên của bạn.
    'top_buttons' => array(),
);



