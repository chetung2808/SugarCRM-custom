<?php
$module_name = 'ECT_Student';
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
            'name' => 'student_id',
            'label' => 'LBL_STUDENT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'class_name',
            'label' => 'LBL_CLASS_NAME',
          ),
          1 => 
          array (
            'name' => 'list_payment',
            'label' => 'LBL_PAYMENT_LIST',
            'customCode' => '{include file="custom/modules/ECT_Student/tpls/editlistpayment.tpl"}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'student_payment',
            'label' => 'LBL_STUDENT_PAYMENT',
          ),
          1 => 
          array (
            'name' => 'student_joinclassdate',
            'label' => 'LBL_STUDENT_JOINCLASSDATE',
          ),
        ),
      ),
    ),
  ),
);
?>
