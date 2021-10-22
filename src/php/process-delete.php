<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_test');
    if (!$conn) {
        die('Không thể kết nối');
    }
    ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM tb_test WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    header("Location:index.php");
} else {
    echo ("Location:error.php");
}
?>