{literal}
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
        .add-button {
            background-color: #ccc;
            border: none;
            color: #000;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Hover style cho nút tắt */
        .close-button:hover {
            background-color: #ddd;
        }

        /* Nút tắt khi hover */
        .close-button:active {
            background-color: #aaa;

        .add-button:hover {
            background-color: #45a049;
        }

        /* Nút add khi hover */
        .add-button:active {
            background-color: #3d9145;
        }

    </style>
{/literal}

<button id="addStudentButton" class="button">Add Student</button>
<div id="addStudentPopup" class="custom-popup hide">
    <button id="moveStudentIntoClassButton" class="add-button">Add</button>
    <button id="closePopupButton" class="close-button">Close</button>
    <h3>Danh sách học viên</h3>
    <input type="hidden" value="{$classId}" id="classId">
    <input type="hidden" value="{$classCost}" id="classCost">
    <input type="hidden" value="{$classStartdate}" id="classStartdate">
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
        {foreach from=$studentList item=student}
            <tr>
                <td class="checkbox-column">
                    <input type="checkbox" name="selectedStudents[]" value="{$student.student_id}" data-id="{$student.primary_id}">
                </td>
                <td class="name-column">{$student.student_name}</td>
                <td class="id-column">{$student.student_custom_id}</td>
                <td class="course-column">{$student.student_course}</td>
                <td class="expected-day-column">{$student.student_expectedday}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{literal}
    <script type="text/javascript">
        $("#addStudentButton").on("click", function() {
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $('#addStudentPopup');
            if (popup.hasClass('hide'))
                popup.removeClass('hide');
            else popup.addClass('hide');
        });

        $("#moveStudentIntoClassButton").on("click", function() {
            debugger;
            // Lấy danh sách học viên đã chọn
            var selectedStudents = [];
            $("input[name='selectedStudents[]']:checked").each(function () {
                selectedStudents.push($(this).val());
            });

            // Kiểm tra xem đã chọn học viên nào hay chưa
            if (selectedStudents.length === 0) {
                // Tắt popup nếu không có học viên nào được chọn
                var popup = $('#addStudentPopup');
                popup.addClass('hide');
                return; // Dừng hàm xử lý tiếp
            }
            var classId = $('#classId').val();
            var classCost = $('#classCost').val();
            var classStartdate = $('#classStartdate').val()


            $.ajax({
                type: "POST",
                url: "index.php?module=ECT_Class&action=handleAjaxClass&sugar_body_only=1",
                data: {
                    classId: classId,
                    classCost: classCost,
                    classStartdate: classStartdate,
                    students: selectedStudents
                },
                dataType: "json",
                success: function (response) {
                    debugger;
                    // Kiểm tra kết quả thành công hay không
                    if (response.success) {
                        alert(response.message);
                        // Tắt popup sau khi đã thêm học viên thành công
                        var popup = $('#addStudentPopup');
                        popup.addClass('hide');
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

        $("#closePopupButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $('#addStudentPopup');
            popup.addClass('hide');
        });
    </script>
{/literal}


