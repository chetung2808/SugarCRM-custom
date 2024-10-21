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

<button id="addClassButton" class="button">Add Class</button>
<div id="addClassPopup" class="custom-popup hide">
    <button id="moveClassIntoLecturerButton" class="add-button">Add</button>
    <button id="closeClassPopupButton" class="close-button">Close</button>
    <h3>Danh sách lớp học chưa có người giảng dạy</h3>
    <input type="hidden" value="{$lecturerId}" id="lecturerId">
    <table>
        <thead>
        <tr>
            <th class="checkbox-column">Select</th>
            <th class="name-column">Class ID</th>
            <th class="id-column">Expected Day</th>
            <th class="course-column">Course</th>
            <th class="expected-day-column">Number Of Students</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$classList item=class}
            <tr>
                <td class="checkbox-column">
                    <input type="checkbox" name="selectedClass[]" value="{$class.class_id}" data-id="{$class.primary_id}">
                </td>
                <td class="name-column">{$class.class_name}</td>
                <td class="id-column">{$class.class_startdate}</td>
                <td class="course-column">{$class.class_course}</td>
                <td class="expected-day-column">{$class.class_numberofstudents}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{literal}
    <script type="text/javascript">
        $("#addClassButton").on("click", function() {
            // Hiển thị popup khi nút "Add Student" được bấm
            var popup = $('#addClassPopup');
            if (popup.hasClass('hide'))
                popup.removeClass('hide');
            else popup.addClass('hide');
        });

        $("#moveClassIntoLecturerButton").on("click", function() {
            debugger;
            // Lấy danh sách học viên đã chọn
            var selectedClass = [];
            $("input[name='selectedClass[]']:checked").each(function () {
                selectedClass.push($(this).val());
            });

            // Kiểm tra xem đã chọn học viên nào hay chưa
            if (selectedClass.length === 0) {
                // Tắt popup nếu không có học viên nào được chọn
                var popup = $('#addClassButton');
                popup.addClass('hide');
                return; // Dừng hàm xử lý tiếp
            }
            var lecturerId = $('#lecturerId').val();


            $.ajax({
                type: "POST",
                url: "index.php?module=ECT_Lecturer&action=handleAjaxLecturer&sugar_body_only=1",
                data: {
                    lecturerId: lecturerId,
                    class: selectedClass
                },
                dataType: "json",
                success: function (response) {
                    debugger;
                    // Kiểm tra kết quả thành công hay không
                    if (response.success) {
                        alert(response.message);
                        // Tắt popup sau khi đã thêm học viên thành công
                        var popup = $('#addClassPopup');
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

        $("#closeClassPopupButton").on("click", function () {
            // Ẩn popup khi nút tắt được bấm
            var popup = $('#addClassPopup');
            popup.addClass('hide');
        });
    </script>
{/literal}
