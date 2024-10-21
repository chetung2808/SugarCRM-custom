<?php
$dictionary["ECT_Payment"]["fields"]["student_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'student_name',
    'vname'      => 'LBL_STUDENT_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'student_id',
    'join_name'  => 'ECT_Student',
    'link'       => 'student_link',
    'table'      => 'ect_student',
    'module'     => 'ECT_Student',
);

$dictionary["ECT_Payment"]["fields"]["student_id"] = array(
    'name'              => 'student_id',
    'rname'             => 'id',
    'vname'             => 'LBL_STUDENT_NAME',
    'type'              => 'id',
    'table'             => 'ect_student',
    'isnull'            => 'true',
    'module'            => 'ECT_Student',
    'dbType'            => 'id',
);

$dictionary["ECT_Payment"]["fields"]["student_link"] = array(
    'name'          => 'student_link',
    'type'          => 'link',
    'relationship'  => 'student_payment',
    'module'        => 'ECT_Student',
    'bean_name'     => 'ECT_Student',
    'source'        => 'non-db',
    'vname'         => 'LBL_STUDENT_NAME',
);
$dictionary["ECT_Payment"]["fields"]["student_name"]['required'] = false;