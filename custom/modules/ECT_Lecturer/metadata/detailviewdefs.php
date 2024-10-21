<?php
$module_name = 'ECT_Lecturer';
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
          1 => 
          array (
            'name' => 'lecturer_id',
            'label' => 'LBL_LECTURER_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lecture_joinday',
            'label' => 'LBL_LECTURE_JOINDAY',
          ),
          1 => 
          array (
            'name' => 'lecturer_course',
            'label' => 'LBL_LECTURER_COURSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lecture_joinclass',
            'label' => 'LBL_LECTURE_JOINCLASS',
            'customCode' => '{include file="custom/modules/ECT_Lecturer/tpls/editaddclass.tpl"}',
          ),
        ),
      ),
    ),
  ),
);
?>
