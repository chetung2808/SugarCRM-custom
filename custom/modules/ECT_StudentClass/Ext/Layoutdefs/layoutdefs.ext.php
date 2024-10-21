<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2023-07-17 09:58:46
$layout_defs["ECT_StudentClass"]["subpanel_setup"]['ect_studentclass_ect_class'] = array (
  'order' => 100,
  'module' => 'ECT_Class',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_STUDENTCLASS_ECT_CLASS_FROM_ECT_CLASS_TITLE',
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


 // created: 2023-07-17 09:58:46
$layout_defs["ECT_StudentClass"]["subpanel_setup"]['ect_studentclass_ect_course'] = array (
  'order' => 100,
  'module' => 'ECT_Course',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_STUDENTCLASS_ECT_COURSE_FROM_ECT_COURSE_TITLE',
  'get_subpanel_data' => 'ect_studentclass_ect_course',
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

?>