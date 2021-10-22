<?php
    $id = $_POST['id'];
    $exam_title = $_POST['exam_title'];
    $exam_datetime = $_POST['exam_datetime'];
    $emp_mobile = $_POST['empMobile'];
    $office_id = $_POST['office'];

    include '../config.php';

    // Bước 02:
    $sql = "INSERT INTO db_test (exam_title, exam_datetime, duration, total_question,marks_per_right_answer,created_on,status,exam_code)
    VALUES ('$emp_name','$emp_position','$emp_email','$emp_mobile','$office_id')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>