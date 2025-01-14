<?php
$module_name = 'ECT_Payment';
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
            'name' => 'student_name',
            'label' => 'LBL_STUDENT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'payment_total',
            'label' => 'LBL_PAYMENT_TOTAL',
          ),
          1 =>
          array (
            'name' => 'payment_tuition',
            'label' => 'LBL_PAYMENT_TUITION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_startdate',
            'label' => 'LBL_PAYMENT_STARTDATE',
          ),
          1 => 
          array (
            'name' => 'payment_deadline',
            'label' => 'LBL_PAYMENT_DEADLINE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'payment_status',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
          1 => 
          array (
            'name' => 'payment_owed',
            'label' => 'LBL_PAYMENT_OWED',
          ),
        ),
        4 =>
            array(
                    0 => array(
                        'name' => 'payment_tragop', // Tên trường custom field
                        'label' => 'LBL_PAYMENT_TRAGOP', // Nhãn hiển thị
                        'customCode' => '{include file="custom/modules/ECT_Payment/tpls/edit_payment_tragop.tpl"}',
                ),
            ),

      ),
    ),
  ),
);
?>
