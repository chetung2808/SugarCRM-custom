<?php
 // created: 2023-07-26 06:25:06
$layout_defs["ECT_Lecturer"]["subpanel_setup"]['ect_lecturer_ect_course'] = array (
  'order' => 100,
  'module' => 'ECT_Course',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECT_LECTURER_ECT_COURSE_FROM_ECT_COURSE_TITLE',
  'get_subpanel_data' => 'ect_lecturer_ect_course',
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
