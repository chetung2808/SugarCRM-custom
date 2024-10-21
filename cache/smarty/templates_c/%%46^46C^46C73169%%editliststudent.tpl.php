<?php /* Smarty version 2.6.11, created on 2023-07-26 09:07:21
         compiled from custom/modules/ECT_Class/tpls/editliststudent.tpl */ ?>
<?php echo '
    <style type="text/css">
        .custom-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 600px;
            background-color: #FFFFCC;
            border: 2px solid black;
            border-radius: 5px;
            padding: 20px;
        }
        .hide {
            display: none; /* Ẩn popup ban đầu */
        }

        .stt-column {
            width: 50px;
        }
        .name-column {
            width: 250px;
        }

        .id-column {
            width: 250px;
        }

        .course-column {
            width: 250px;
        }

        .expected-day-column {
            width: 200px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .close-button {
            background-color: #ccc;
            border: none;
            color: #000;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        /*.add-button {*/
        /*    background-color: #ccc;*/
        /*    border: none;*/
        /*    color: #000;*/
        /*    padding: 5px 10px;*/
        /*    border-radius: 3px;*/
        /*    cursor: pointer;*/
        /*}*/

        /* Hover style cho nút tắt */
        .close-button:hover {
            background-color: #ddd;
        }

        /* Nút tắt khi hover */
        .close-button:active {
            background-color: #aaa;

        /*.add-button:hover {*/
        /*    background-color: #45a049;*/
        /*}*/

        /*!* Nút add khi hover *!*/
        /*.add-button:active {*/
        /*    background-color: #3d9145;*/
        /*}*/

    </style>
'; ?>


<button id="listStudentButton" class="button">Student List</button>
<div id="listStudentPopup" class="custom-popup hide">
    <button id="closeListPopupButton" class="close-button">Close</button>
    <h3>Danh sách học viên</h3>
    <input type="hidden" value="<?php echo $this->_tpl_vars['classId']; ?>
" id="classId">
    <input type="hidden" value="<?php echo $this->_tpl_vars['classCost']; ?>
" id="classCost">
    <input type="hidden" value="<?php echo $this->_tpl_vars['classStartdate']; ?>
" id="classStartdate">
    <table>
        <thead>
        <tr>
            <th class="name-column">Tên</th>
            <th class="id-column">ID</th>
            <th class="course-column">Course</th>
            <th class="expected-day-column">Expected Day</th>
        </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['studentListt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['studentt']):
?>
            <tr>
                <td class="name-column"><?php echo $this->_tpl_vars['studentt']['student_name']; ?>
</td>
                <td class="id-column"><?php echo $this->_tpl_vars['studentt']['student_custom_id']; ?>
</td>
                <td class="course-column"><?php echo $this->_tpl_vars['studentt']['student_course']; ?>
</td>
                <td class="expected-day-column"><?php echo $this->_tpl_vars['studentt']['student_expectedday']; ?>
</td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
</div>

<?php echo '
    <script type="text/javascript">
        $("#listStudentButton").on("click", function() {
            debugger;
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $(\'#listStudentPopup\');
            if (popup.hasClass(\'hide\'))
                popup.removeClass(\'hide\');
            else popup.addClass(\'hide\');
        });

        //

        $("#closeListPopupButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $(\'#listStudentPopup\');
            popup.addClass(\'hide\');
        });
    </script>
'; ?>


