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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'ECT',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'EnglishCenterT',
  'published_date' => '2023-07-11 10:25:18',
  'type' => 'module',
  'version' => 1689071118,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'EnglishCenterT',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ECT_Class',
      'class' => 'ECT_Class',
      'path' => 'modules/ECT_Class/ECT_Class.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ECT_Course',
      'class' => 'ECT_Course',
      'path' => 'modules/ECT_Course/ECT_Course.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ECT_Lecturer',
      'class' => 'ECT_Lecturer',
      'path' => 'modules/ECT_Lecturer/ECT_Lecturer.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ECT_Payment',
      'class' => 'ECT_Payment',
      'path' => 'modules/ECT_Payment/ECT_Payment.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'ECT_Student',
      'class' => 'ECT_Student',
      'path' => 'modules/ECT_Student/ECT_Student.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ect_class_ect_student_ECT_Class.php',
      'to_module' => 'ECT_Class',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ect_course_ect_class_ECT_Course.php',
      'to_module' => 'ECT_Course',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ect_course_ect_lecturer_ECT_Course.php',
      'to_module' => 'ECT_Course',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ect_lecturer_ect_course_ECT_Lecturer.php',
      'to_module' => 'ECT_Lecturer',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ect_student_ect_payment_ECT_Student.php',
      'to_module' => 'ECT_Student',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ect_class_ect_studentMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ect_course_ect_classMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ect_course_ect_lecturerMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ect_lecturer_ect_courseMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ect_student_ect_paymentMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECT_Class',
      'to' => 'modules/ECT_Class',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECT_Course',
      'to' => 'modules/ECT_Course',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECT_Lecturer',
      'to' => 'modules/ECT_Lecturer',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECT_Payment',
      'to' => 'modules/ECT_Payment',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECT_Student',
      'to' => 'modules/ECT_Student',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Student.php',
      'to_module' => 'ECT_Student',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Class.php',
      'to_module' => 'ECT_Class',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Class.php',
      'to_module' => 'ECT_Class',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Course.php',
      'to_module' => 'ECT_Course',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Lecturer.php',
      'to_module' => 'ECT_Lecturer',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Course.php',
      'to_module' => 'ECT_Course',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Course.php',
      'to_module' => 'ECT_Course',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Lecturer.php',
      'to_module' => 'ECT_Lecturer',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Payment.php',
      'to_module' => 'ECT_Payment',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECT_Student.php',
      'to_module' => 'ECT_Student',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_class_ect_student_ECT_Student.php',
      'to_module' => 'ECT_Student',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_class_ect_student_ECT_Class.php',
      'to_module' => 'ECT_Class',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_course_ect_class_ECT_Class.php',
      'to_module' => 'ECT_Class',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_course_ect_class_ECT_Course.php',
      'to_module' => 'ECT_Course',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_course_ect_lecturer_ECT_Lecturer.php',
      'to_module' => 'ECT_Lecturer',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_course_ect_lecturer_ECT_Course.php',
      'to_module' => 'ECT_Course',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_lecturer_ect_course_ECT_Course.php',
      'to_module' => 'ECT_Course',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_lecturer_ect_course_ECT_Lecturer.php',
      'to_module' => 'ECT_Lecturer',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_student_ect_payment_ECT_Payment.php',
      'to_module' => 'ECT_Payment',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ect_student_ect_payment_ECT_Student.php',
      'to_module' => 'ECT_Student',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);