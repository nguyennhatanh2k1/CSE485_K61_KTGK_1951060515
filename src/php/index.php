<?php
include './header.php';
?>

<main>
    <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
    <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
    <!-- Quy trình 4 bước -->
    <a href="./add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Nhân viên</a>
    <input type="button" value="Show" onclick="show()">
    <input type="button" value="Hide" onclick="hide()">
    <table class="table">
        <thead class="show">
            <tr>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Tên bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Số câu hỏi</th>
                <th scope="col">Điểm/câu tl đúng</th>
                <th scope="col">Ngày tạo bài thi</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Mã truy cập bài thi</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <thead class="hide" hidden>
            <tr>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Tên bài thi</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Mã truy cập bài thi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            <?php
            // Quy trình 4 bước
            // Bước 01: Đã tạo sẵn, gọi lại thôi
            include './config.php';
            // Bước 02: Thực hiện TRUY VẤN
            $sql = "SELECT * FROM tb_test";
            $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
            // Bước 03: Phân tích và xử lý kết quả
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr class="show">
                        <th scope="row"><?php echo $row['id']; ?> </th>
                        <td><?php echo $row['exam_title']; ?></td>
                        <td><?php echo $row['exam_datetime']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['total_question']; ?></td>
                        <td><?php echo $row['marks_per_right_answer']; ?></td>
                        <td><?php echo $row['created_on']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['exam_code']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-user-edit"></i></a></td>
                        <td><a href="process-delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-user-times"></i></a></td>
                    </tr>
                    <tr class="hide" hidden>
                    <th scope="row"><?php echo $row['id']; ?> </th>
                        <td><?php echo $row['exam_title']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['exam_code']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['emp_id']; ?>"><i class="fas fa-user-edit"></i></a></td>
                        <td><a href="process-delete.php?id=<?php echo $row['emp_id']; ?>"><i class="fas fa-user-times"></i></a></td>
                    </tr>
            <?php
                }
            }
            ?>

            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
        </tbody>
    </table>
</main>

<?php
include './footer.php';
?>