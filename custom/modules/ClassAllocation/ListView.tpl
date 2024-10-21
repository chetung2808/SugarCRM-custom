<h2>Danh sách học viên</h2>

<table>
    <thead>
    <tr>
        <th>Tên học viên</th>
        <th>Khóa học</th>
        <th>Lớp học</th>
    </tr>
    </thead>
    <tbody>
    <!-- Vòng lặp hiển thị danh sách học viên -->
    {foreach from=$students item=student}
        <tr>
            <td>{$student.name}</td>
            <td>{$student.course}</td>
            <td>{$student.class}</td>
        </tr>
    {/foreach}
    </tbody>
</table>
