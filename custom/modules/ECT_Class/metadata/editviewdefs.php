<?php
$module_name = 'ECT_Class';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ect_course_ect_class_name',
          ),
          1 => 
          array (
            'name' => 'class_maxnumofstudent',
            'label' => 'LBL_CLASS_MAXNUMOFSTUDENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'class_startdate',
            'label' => 'LBL_CLASS_STARTDATE',
          ),
        ),
      ),
    ),
  ),
);
?>