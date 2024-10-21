<?php
// created: 2023-07-20 12:52:33
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'student_course' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_STUDENT_COURSE',
    'width' => '10%',
    'default' => true,
  ),
  'student_id' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_STUDENT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'student_payment' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_STUDENT_PAYMENT',
    'width' => '10%',
    'default' => true,
  ),
  'class_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CLASS_NAME',
    'id' => 'CLASS_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ECT_Class',
    'target_record_key' => 'class_id',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ECT_Student',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ECT_Student',
    'width' => '5%',
    'default' => true,
  ),
);