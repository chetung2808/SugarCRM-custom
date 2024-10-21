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
  'ect_student_modified_user' => 
  array (
    'id' => '2dc3ee27-72db-e8ad-4511-64b64fe84443',
    'relationship_name' => 'ect_student_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
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
    'from_studio' => false,
  ),
  'ect_student_created_by' => 
  array (
    'id' => '2e49c10a-f3f1-6ee3-e0d5-64b64f516831',
    'relationship_name' => 'ect_student_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
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
    'from_studio' => false,
  ),
  'ect_student_assigned_user' => 
  array (
    'id' => '2ecb337f-1aec-5b18-9fb4-64b64f5f1a6d',
    'relationship_name' => 'ect_student_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
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
    'from_studio' => false,
  ),
  'ect_class_ect_student' => 
  array (
    'id' => '5a012c57-72e6-c2b2-5572-64b64ff4f60d',
    'relationship_name' => 'ect_class_ect_student',
    'lhs_module' => 'ECT_Class',
    'lhs_table' => 'ect_class',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
    'rhs_key' => 'id',
    'join_table' => 'ect_class_ect_student_c',
    'join_key_lhs' => 'ect_class_ect_studentect_class_ida',
    'join_key_rhs' => 'ect_class_ect_studentect_student_idb',
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
    'from_studio' => false,
  ),
  'ect_studentclass_ect_student' => 
  array (
    'id' => '5d804807-c4cc-0e2a-4a92-64b64ff5851a',
    'relationship_name' => 'ect_studentclass_ect_student',
    'lhs_module' => 'ECT_StudentClass',
    'lhs_table' => 'ect_studentclass',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Student',
    'rhs_table' => 'ect_student',
    'rhs_key' => 'id',
    'join_table' => 'ect_studentclass_ect_student_c',
    'join_key_lhs' => 'ect_studentclass_ect_studentect_studentclass_ida',
    'join_key_rhs' => 'ect_studentclass_ect_studentect_student_idb',
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
    'from_studio' => false,
  ),
  'ect_student_ect_payment' => 
  array (
    'id' => '5dff638f-c343-d4b4-cb9c-64b64f461a3d',
    'relationship_name' => 'ect_student_ect_payment',
    'lhs_module' => 'ECT_Student',
    'lhs_table' => 'ect_student',
    'lhs_key' => 'id',
    'rhs_module' => 'ECT_Payment',
    'rhs_table' => 'ect_payment',
    'rhs_key' => 'id',
    'join_table' => 'ect_student_ect_payment_c',
    'join_key_lhs' => 'ect_student_ect_paymentect_student_ida',
    'join_key_rhs' => 'ect_student_ect_paymentect_payment_idb',
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
    'from_studio' => false,
  ),
);