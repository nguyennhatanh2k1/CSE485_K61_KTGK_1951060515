<?php
include '../header.php';
?>

<main>
    <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
    <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
    <!-- Quy trình 4 bước -->
    <a href="addEmployee.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Nhân viên</a>
    <table class="table">
        <thead>
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
            </tr>
        </thead>
        <tbody>
            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            <?php
            // Quy trình 4 bước
            // Bước 01: Đã tạo sẵn, gọi lại thôi
            include './config.php';
            // Bước 02: Thực hiện TRUY VẤN
            $sql = "SELECT e.emp_id,e.emp_name,e.emp_position,e.emp_email,e.emp_mobile, o.office_name FROM db_employees e, db_offices o
                    WHERE e.office_id = o.office_id";
            $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
            // Bước 03: Phân tích và xử lý kết quả
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row['emp_id']; ?> </th>
                        <td><?php echo $row['emp_name']; ?></td>
                        <td><?php echo $row['emp_position']; ?></td>
                        <td><?php echo $row['emp_email']; ?></td>
                        <td><?php echo $row['emp_mobile']; ?></td>
                        <td><?php echo $row['office_name']; ?></td>
                        <td><a href="editEmployee.php?id=<?php echo $row['emp_id']; ?>"><i class="fas fa-user-edit"></i></a></td>
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
include '../footer.php';
?>