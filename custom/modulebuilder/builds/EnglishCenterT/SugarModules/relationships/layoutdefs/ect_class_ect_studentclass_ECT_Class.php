<?php
 // created: 2023-07-17 09:53:07
$layout_defs["ECT_Class"]["subpanel_setup"]['ect_class_ect_studentclass'] = array (
  'order' => 100,
  'module' => 'ECT_StudentClass',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_CLASS_ECT_STUDENTCLASS_FROM_ECT_STUDENTCLASS_TITLE',
  'get_subpanel_data' => 'ect_class_ect_studentclass',
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
