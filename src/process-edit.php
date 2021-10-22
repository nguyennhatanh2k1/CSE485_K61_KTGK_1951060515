<?php

    if (isset($_POST['btn-edit'])) {
    
    $emp_name = $_POST['empName'];
    $emp_position = $_POST['empPosition'];
    $emp_email = $_POST['empEmail'];
    $emp_mobile = $_POST['empMobile'];
    $office_id = $_POST['office'];
    // include '../config.php';
    // Bước 02:
    $sql = "update db_employees set emp_name ='$emp_name',emp_position = '$emp_position',emp_email =  '$emp_email',emp_mobile = '$emp_mobile',office_id = '$office_id' where emp_id = $id";

    // echo $sql;
    $result = mysqli_query($conn,$sql);
    // // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }
    }


    //Bước 04: Đóng kết nối
    // mysqli_close($conn);
?>