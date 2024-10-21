<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$relationships = array (
  'ect_studentclass_modified_user' => 
  array (
    'id' => '1766a781-30d3-4103-c3d1-64b4ef1d7ac5',
    'relationship_name' => 'ect_studentclass_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'ect_studentclass_created_by' => 
  array (
    'id' => '18008155-34d0-ef1a-53e1-64b4ef0c0733',
    'relationship_name' => 'ect_studentclass_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'ect_studentclass_assigned_user' => 
  array (
    'id' => '18c7431f-03f0-4686-68e5-64b4ef8ec701',
    'relationship_name' => 'ect_studentclass_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'ect_class_ect_studentclass' => 
  array (
    'id' => '3de552ce-314a-65f7-7718-64b4ef392388',
    'relationship_name' => 'ect_class_ect_studentclass',
    'lhs_module' => 'ECT_Class',
    'lhs_table' => 'ect_class',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'id',
    'join_table' => 'ect_class_ect_studentclass_c',
    'join_key_lhs' => 'ect_class_ect_studentclassect_class_ida',
    'join_key_rhs' => 'ect_class_ect_studentclassect_studentclass_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ect_course_ect_studentclass' => 
  array (
    'id' => '3f4d9593-fd35-df70-0938-64b4ef82713a',
    'relationship_name' => 'ect_course_ect_studentclass',
    'lhs_module' => 'ECT_Course',
    'lhs_table' => 'ect_course',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'id',
    'join_table' => 'ect_course_ect_studentclass_c',
    'join_key_lhs' => 'ect_course_ect_studentclassect_course_ida',
    'join_key_rhs' => 'ect_course_ect_studentclassect_studentclass_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ect_studentclass_ect_student_1' => 
  array (
    'id' => '41252481-376e-0054-5eda-64b4efec79e2',
    'relationship_name' => 'ect_studentclass_ect_student_1',
    'lhs_module' => 'ECT_StudentClass',
    'lhs_table' => 'ect_studentclass',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
    'rhs_key' => 'id',
    'join_table' => 'ect_studentclass_ect_student_1_c',
    'join_key_lhs' => 'ect_studentclass_ect_student_1ect_studentclass_ida',
    'join_key_rhs' => 'ect_studentclass_ect_student_1ect_student_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'ect_student_ect_studentclass' => 
  array (
    'id' => '4257ee55-f800-cdc3-5394-64b4ef83b347',
    'relationship_name' => 'ect_student_ect_studentclass',
    'lhs_module' => 'ECT_Student',
    'lhs_table' => 'ect_student',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_StudentClass',
    'rhs_table' => 'ect_studentclass',
    'rhs_key' => 'id',
    'join_table' => 'ect_student_ect_studentclass_c',
    'join_key_lhs' => 'ect_student_ect_studentclassect_student_ida',
    'join_key_rhs' => 'ect_student_ect_studentclassect_studentclass_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ect_studentclass_ect_class_1' => 
  array (
    'rhs_label' => 'Class',
    'lhs_label' => 'Student - Class',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECT_StudentClass',
    'rhs_module' => 'ECT_Class',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'ect_studentclass_ect_class_1',
  ),
);