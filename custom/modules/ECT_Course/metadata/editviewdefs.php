<?php
$module_name = 'ECT_Course';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'course_cost',
            'label' => 'LBL_COURSE_COST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course_extendedtime',
            'label' => 'LBL_COURSE_EXTENDEDTIME',
          ),
        ),
      ),
    ),
  ),
);
?>
