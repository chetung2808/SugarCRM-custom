{literal}
    <style type="text/css">
        .custom-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 200px;
            background-color: yellow;
            border: 2px solid black;
            border-radius: 5px;
            padding: 20px;
        }
        .hide {
            display: none; /* Ẩn popup ban đầu */
        }
    </style>
{/literal}

<button id="addStudentButton" class="button">Add Student</button>

<div id="addStudentPopup" class="custom-popup hide">
    <h3>Danh sách học viên</h3>
    <table>
        <thead>
        <tr>
            <th>Tên</th>
            <th>ID</th>
            <th>Course</th>
            <th>Expected Day</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$studentList item=student}
            <tr>
                <td>{$student.name}</td>
                <td>{$student.id}</td>
                <td>{$student.course}</td>
                <td>{$student.expected_day}</td>
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
                popup.removeClass('hide')
            else popup.addClass('hide')
        });
    </script>
{/literal}
