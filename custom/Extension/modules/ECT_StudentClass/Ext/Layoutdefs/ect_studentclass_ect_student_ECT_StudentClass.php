<?php
 // created: 2023-07-17 09:58:46
$layout_defs["ECT_StudentClass"]["subpanel_setup"]['ect_studentclass_ect_student'] = array (
  'order' => 100,
  'module' => 'ECT_Student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_STUDENTCLASS_ECT_STUDENT_FROM_ECT_STUDENT_TITLE',
  'get_subpanel_data' => 'ect_studentclass_ect_student',
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