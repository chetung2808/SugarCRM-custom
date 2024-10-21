<?php
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