<?php
    include '../header.php';
    include '../config.php';
?>
    <main class="container">
        <div class="bg-gray-light ">
            <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
            HỆ THỐNG QUẢN LÝ THI TRẮC NGHIỆM TRỰC TUYẾN
            </h4>
        </div>
        <form action="process-add.php" method="post">

            <div class="form-group row">
                <label for="txtTitle" class="col-sm-2 col-form-label">Tên bài thi: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtTitle" name="txtTitle">
                </div>
            </div>
            <div class="form-group row">
                <label for="txtDate" class="col-sm-2 col-form-label">Ngày thi: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtDate" name="txtDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="bdage" class="col-sm-2 col-form-label">Thời gian làm bài: </label>
                <div class="col-sm-10">
                    <input type="bdage" class="form-control" id="txtDuration" name="txtDuration">
                </div>
            </div>
        <div class="form-group row">
            <label for="bdbgroup" class="col-sm-2 col-form-label"> Số câu hỏi:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="txtQuestion" name="txtQuestion">
            </div>
            <div class="form-group row">
                <label for="txtMarks" class="col-sm-2 col-form-label">Điểm:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="txtMarks" name="txtMarks">
                </div>
            </div>
            <div class="form-group row">
                <label for="txtCreated" class="col-sm-2 col-form-label">Ngày tạo bài thi:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="txtCreated" name="txtCreated">
                </div>
            </div>
            <div class="form-group row">
                <label for="txtStatus" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="txtStatus" name="txtStatus">
                </div>
            </div>
            <div class="form-group row">
                <label for="txtExam" class="col-sm-2 col-form-label">Mã truy cập bài thi:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="txtExam" name="txtExam">
                </div>
            </div>
            <div class="col-sm-10"></br>
                <button type="submit" class="btn btn-success" name="btnSave">Lưu lại</button>
            </div>
        </div>
    </form>
</main>
    
<?php
    include '../footer.php';
?>