<?php
$module_name = 'ECT_Course';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course_id',
            'label' => 'LBL_COURSE_ID',
          ),
          1 => 
          array (
            'name' => 'course_cost',
            'label' => 'LBL_COURSE_COST',
          ),
        ),
        2 => 
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
