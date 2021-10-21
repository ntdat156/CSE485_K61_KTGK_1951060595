<?php
include('header.php');
?>

<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa</h2>
                <?php
                //1. get the ID of select admin
                $bd_id = $_GET['bd_id'];

                //2. create SQL Query to Get the Details
                $sql = "SELECT * FROM blood_donor WHERE bd_id=$bd_id";

                //echo $sql;
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if ($count == 1) {
                        $row = mysqli_fetch_assoc($res);

                        $bd_name = $row['bd_name'];
                        $bd_sex = $row['bd_sex'];
                        $bd_age = $row['bd_age'];
                        $bd_bgroup = $row['bd_bgroup'];
                        $bd_reg_date = $row['bd_reg_date'];
                        $bd_phno = $row['bd_phno'];
                    } else {
                        header('location:' . SITEURL . 'index.php');
                    }
                }

                ?>
                <form action="process-update.php" method="POST" class="mb-4" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="txtHoTen" class="col-sm-2 col-form-label">Tên người hiến máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" value="<?php echo $bd_name; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtGioiTinh" name="txtGioiTinh" value="<?php echo $bd_sex; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtNamSinh" class="col-sm-2 col-form-label">Năm sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtNamSinh" name="txtNamSinh" value="<?php echo $bd_age; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtNhomMau" name="txtNhomMau" value="<?php echo $bd_bgroup; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtNgay" class="col-sm-2 col-form-label">Ngày hiến máu</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtNgay" name="txtNgay" value="<?php echo $bd_reg_date; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtSDT" class="col-sm-2 col-form-label">Tên đơn vị</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtSDT" name="txtSDT" value="<?php echo $bd_phno; ?>">
                        </div>
                    </div>

                    <input type="hidden" name="manv" value="<?php echo $manv; ?>">
                    <button type="submit" class="add" name="btnUpdate">Sửa</button>

                </form>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
</main>