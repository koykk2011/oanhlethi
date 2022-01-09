<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <a class="btn btn-primary" href="index.php?controller=employee&action=index">Chi tiết</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Mã Người đăng ký</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Ngày Đăng ký</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($users as $row){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['bd_id'];?></th>
                                <td><?php echo $row['bd_name']; ?></td>
                                <td><?php echo $row['bd_group']; ?></td>
                                <td><?php echo $row['bd_reg_date']; ?></td>
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