<?php
 // created: 2023-07-24 12:21:00
$layout_defs["ECT_Class"]["subpanel_setup"]['ect_class_ect_student'] = array (
  'order' => 100,
  'module' => 'ECT_Student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_CLASS_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
  'get_subpanel_data' => 'ect_class_ect_student',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
