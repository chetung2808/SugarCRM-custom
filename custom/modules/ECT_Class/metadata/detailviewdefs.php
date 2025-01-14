<?php
$module_name = 'ECT_Class';
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
          0 => 
          array (
            'name' => 'class_course',
            'label' => 'LBL_CLASS_COURSE',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'class_isstart',
            'studio' => 'visible',
            'label' => 'LBL_CLASS_ISSTART',
          ),
          1 => 
          array (
            'name' => 'class_isfull',
            'studio' => 'visible',
            'label' => 'LBL_CLASS_ISFULL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'class_cost',
            'label' => 'LBL_CLASS_COST',
          ),
          1 => 
          array (
            'name' => 'class_startdate',
            'label' => 'LBL_CLASS_STARTDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'class_numberofstudents',
            'label' => 'LBL_CLASS_NUMBEROFSTUDENTS',
          ),
          1 => 
          array (
            'name' => 'class_maxnumofstudent',
            'label' => 'LBL_CLASS_MAXNUMOFSTUDENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'class_enddate',
            'label' => 'LBL_CLASS_ENDDATE',
          ),
          1 => 
          array (
            'name' => 'add_student',
            'label' => 'LBL_ADD_STUDENT',
            'customCode' => '{include file="custom/modules/ECT_Class/tpls/editaddstudent.tpl"}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'list_student',
            'label' => 'LBL_LIST_STUDENT',
            'customCode' => '{include file="custom/modules/ECT_Class/tpls/editliststudent.tpl"}',
          ),
          1 => 
          array (
            'name' => 'remove_student',
            'label' => 'LBL_REMOVE_STUDENT',
            'customCode' => '{include file="custom/modules/ECT_Class/tpls/editremovestudent.tpl"}',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'lecturer_name',
            'label' => 'LBL_LECTURER_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
