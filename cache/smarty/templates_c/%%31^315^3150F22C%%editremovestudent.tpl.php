<?php /* Smarty version 2.6.11, created on 2023-07-26 09:07:21
         compiled from custom/modules/ECT_Class/tpls/editremovestudent.tpl */ ?>
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
        .close-button:hover {
            background-color: #ddd;
        .close-button:active {
            background-color: #aaa;

    </style>
'; ?>



<button id="removeStudentButton" class="button">Remove Student</button>
<div id="removeStudentPopup" class="custom-popup hide">
    <button id="removeStudentInClassButton" class="add-button">Remove</button>
    <button id="closeRemoveStudentButton" class="close-button">Close</button>
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
            <th class="checkbox-column">Select</th>
            <th class="name-column">Tên</th>
            <th class="id-column">ID</th>
            <th class="course-column">Course</th>
            <th class="expected-day-column">Expected Day</th>
        </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['studentListtt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['studenttt']):
?>
            <tr>
                <td class="checkbox-column">
                    <input type="checkbox" name="selectedRemoveStudents[]" value="<?php echo $this->_tpl_vars['studenttt']['student_id']; ?>
" data-id="<?php echo $this->_tpl_vars['studenttt']['primary_id']; ?>
">
                </td>
                <td class="name-column"><?php echo $this->_tpl_vars['studenttt']['student_name']; ?>
</td>
                <td class="id-column"><?php echo $this->_tpl_vars['studenttt']['student_custom_id']; ?>
</td>
                <td class="course-column"><?php echo $this->_tpl_vars['studenttt']['student_course']; ?>
</td>
                <td class="expected-day-column"><?php echo $this->_tpl_vars['studenttt']['student_expectedday']; ?>
</td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
</div>


<?php echo '
    <script type="text/javascript">
        $("#removeStudentButton").on("click", function() {
            debugger;
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $(\'#removeStudentPopup\');
            if (popup.hasClass(\'hide\'))
                popup.removeClass(\'hide\');
            else popup.addClass(\'hide\');
        });

        $("#removeStudentInClassButton").on("click", function() {
            var selectedRemoveStudents = [];
            $("input[name=\'selectedRemoveStudents[]\']:checked").each(function () {
                selectedRemoveStudents.push($(this).val());
            });

            if (selectedRemoveStudents.length === 0) {
                // Tắt popup nếu không có học viên nào được chọn
                var popup = $(\'#removeStudentPopup\');
                popup.addClass(\'hide\');
                return; // Dừng hàm xử lý tiếp
            }
            var classId = $(\'#classId\').val();
            var classCost = $(\'#classCost\').val();
            var classStartdate = $(\'#classStartdate\').val()

            $.ajax({
                type: "POST",
                url: "index.php?module=ECT_Class&action=handleAjaxRemoveClass&sugar_body_only=1",
                data: {
                    classId: classId,
                    classCost: classCost,
                    classStartdate: classStartdate,
                    students: selectedRemoveStudents
                },
                dataType: "json",
                success: function (response) {
                    debugger;
                    // Kiểm tra kết quả thành công hay không
                    if (response.success) {
                        alert(response.message);
                        // Tắt popup sau khi đã thêm học viên thành công
                        var popup = $(\'#removeStudentPopup\');
                        popup.addClass(\'hide\');
                        // Reload trang để cập nhật thông tin lớp (tùy theo yêu cầu của bạn)
                        location.reload();
                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    debugger;
                    alert("Có lỗi xảy ra khi thêm học viên vào lớp.");
                }
            });


        });

        $("#closeRemoveStudentButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $(\'#removeStudentPopup\');
            popup.addClass(\'hide\');
        });
    </script>
'; ?>