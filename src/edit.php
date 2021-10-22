<?php
    include '../header.php';
    include '../config.php';
    $id = $_GET['id'];
    $sql = "select *, office_name from db_employees e, db_offices o where e.office_id = o.office_id and emp_id = '$id'";
    $result_current = mysqli_query($conn, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
?>

    <main class="container">
        <h2>Sửa thông tin danh bạ Nhân viên</h2>
        <form action="./process-edit.php" method="post">
            <div class="form-group row">
                <label for="empId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="empId" name="empId" readonly value="<?php echo $id;?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="empName" name="empName" value="<?php echo $row_current['emp_name'];?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="empPosition" name="empPosition" value="<?php echo $row_current['emp_position'];?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="empEmail" name="empEmail" value="<?php echo $row_current['emp_email'];?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Số di động</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile" value="<?php echo $row_current['emp_mobile'];?> ">
                </div>
            </div>

            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Tên cơ quan</label>
                <div class="col-sm-10">
                    <select name="office" id="office">
                        <!-- Lấy dữ liệu từ bảng Office -->
                        <?php
                            $sql = "SELECT * FROM db_offices";
                            $result = mysqli_query($conn,$sql);
    
                            
                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){
                                   
                                   echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
                                   
                                }
                            }

                        ?>
                        
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success" name="btn-edit">Sửa</button>
                </div>
            </div>
        </form>
    </main>
    
<?php
    include '../footer.php';
?>