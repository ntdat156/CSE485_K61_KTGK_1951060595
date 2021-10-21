<?php
require('constants.php');
if (isset($_POST['btnUpdate']))
//kiểm tra 
{
    // Button Clicked
    //echo "Button Clicked";

    //1. Get the Data from form
    $bd_name = $_POST['bd_name'];
    $bd_sex = $_POST['txtGioiTinh'];
    $bd_age = $_POST['txtNamSinh'];
    $bd_bgroup = $_POST['txtNhomMau'];
    $bd_reg_date = $_POST['txtNgay'];
    $bd_phno = $_POST['txtSDT'];
    
    //Create a SQL Query to Update Admin
    $sql = "UPDATE blood_donor SET
            bd_name = '$bd_name',
            bd_sex = '$bd_sex',
            bd_age = '$bd_age',
            bd_bgroup = '$bd_bgroup',
            bd_reg_date = '$bd_reg_date',
            bd_phno = '$bd_phno'
            WHERE blood_donor.bd_id = '$bd_id'";
    //Execute the Query
    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $_SESSION['noti'] = "Sửa thành công";
        header("location:" . SITEURL . 'index.php');
    } else {
        $_SESSION['noti'] = "Sửa không thành công";
        header("location:" . SITEURL . 'index.php');
    }
}
