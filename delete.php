<?php   
include('header.php');
require('constants.php')
?>

<?php 

    //Include constants.php file here
    include('constants.php');

    // 1. get the ID of Admin to be deleted
    $bd_id = $_GET['bd_id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM blood_donor WHERE blood_donor.bd_id = '$bd_id'";
    
    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and Admin Deleted
        //echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "Xóa thành công.";
        //Redirect to Manage Admin Page
        header('location:'.SITEURL.'index.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "Xóa không thành công. Vui lòng thử lại.";
        header('location:'.SITEURL.'index.php');
    }

    //3. Redirect to Manage Admin page with message (success/error)

?>