<?php
    require_once 'model/UserModel.php';
    class UserController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/index.php';
        }

        // function add(){
        //     // Kiểm tra nếu người dùng nhấn submit
        //     // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            
        //     // Nếu ko show ra view UserView/add.php tương ứng
        // }

        // function edit(){
        //     // Kiểm tra nếu người dùng nhấn submit
        //     // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

        //     // Nếu ko show ra view UserView/edit.php tương ứng
        // }
    }



?>