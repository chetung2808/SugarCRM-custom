<?php
$dictionary["ECT_Lecturer"]["relationships"]["lecturer_class"] = array (
'lhs_module' => 'ECT_Lecturer',
'lhs_table' => 'ect_lecturer',
'lhs_key' => 'id',
'rhs_module' => 'ECT_Class',
'rhs_table' => 'ect_class',
'rhs_key' => 'lecturer_id',
'relationship_type' => 'one-to-many'
);