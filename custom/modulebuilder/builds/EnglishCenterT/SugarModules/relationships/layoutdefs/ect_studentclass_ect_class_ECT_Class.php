<?php
 // created: 2023-07-17 09:55:40
$layout_defs["ECT_Class"]["subpanel_setup"]['ect_studentclass_ect_class'] = array (
  'order' => 100,
  'module' => 'ECT_StudentClass',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_STUDENTCLASS_ECT_CLASS_FROM_ECT_STUDENTCLASS_TITLE',
  'get_subpanel_data' => 'ect_studentclass_ect_class',
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
