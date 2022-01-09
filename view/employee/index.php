<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <a class="btn btn-primary" href="index.php?controller=employee&action=add">Thêm người đăng ký</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Mã Người đăng ký</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Ngày đăng ký</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($emps as $row){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['bd_id'];?></th>
                                <td><?php echo $row['bd_name']; ?></td>
                                <td><?php echo $row['bd_sex']; ?></td>
                                <td><?php echo $row['bd_age']; ?></td>
                                <td><?php echo $row['bd_group']; ?></td>
                                <td><?php echo $row['bd_reg_date']; ?></td>
                                <td><?php echo $row['bd_phone']; ?></td>
                                <td><a href="index.php?controller=employee&action=edit&id=<?php echo $row['bd_id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="index.php?controller=employee&action=delete&id=<?php echo $row['bd_id']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>