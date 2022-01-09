<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm người đăng ký</h2>
                    <div style="color: red">
                        <?php echo $error; ?>
                    </div>
                </div>

                <form method="post" action="">
                    Nhập họ tên :
                    <input type="text" name="bdName" value="" />
                    <br />
                    Nhập giới tính :
                    <input type="text" name="bdSex" value="" />
                    <br />
                    Nhập ngày sinh :
                    <input type="text" name="bdAge" value="" />
                    <br />
                    Nhập nhóm máu :
                    <input type="text" name="bdGroup" value="" />
                    <br />
                    Nhập ngày đăng ký :
                    <input type="text" name="bdRegDate" value="" />
                    <br />
                    Nhập SĐT :
                    <input type="text" name="bdPhone" value="" />
                    <br />
                    <input type="submit" name="btnSave" value="Save" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>