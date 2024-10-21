<?php
 // created: 2023-07-17 09:53:09
$layout_defs["ECT_Student"]["subpanel_setup"]['ect_student_ect_studentclass'] = array (
  'order' => 100,
  'module' => 'ECT_StudentClass',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_STUDENT_ECT_STUDENTCLASS_FROM_ECT_STUDENTCLASS_TITLE',
  'get_subpanel_data' => 'ect_student_ect_studentclass',
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
