<?php
include('header.php');
?>
<div class="row">
    <div class="col-md-12 ">
        <?php
        if (isset($_SESSION['delete'])) //Checking whether the SEssion is Set of Not
        {
            echo $_SESSION['delete']; //Display the SEssion Message if SEt
            unset($_SESSION['delete']); //Remove Session Message
        }
        ?>
        <div class="mt-2 mb-2">
            <a href="add-member.php" class="btn btn-success">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã số</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày đăng kí hiến máu</th>
                    <th scope="col">Số điện thoại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno FROM blood_donor order by bd_id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <th scope="row"><?php echo $i; ?> </th>
                            <td><?php echo $row['bd_name']; ?> </td>
                            <td><?php echo $row['bd_sex']; ?> </td>
                            <td><?php echo $row['bd_age']; ?> </td>
                            <td><?php echo $row['bd_bgroup']; ?> </td>
                            <td><?php echo $row['bd_reg_date']; ?> </td>
                            <td><?php echo $row['bd_phno']; ?> </td>
                            <td><a href="update.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>

</html>