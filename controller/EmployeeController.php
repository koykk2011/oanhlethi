<?php
    require_once 'model/EmployeeModel.php';
    class EmployeeController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $empModel = new EmployeeModel();
            $emps = $empModel->getAllEmps();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/employee/index.php';
        }

        function add(){
            $error = '';
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            if (isset($_POST['btnSave'])){
                $bdID = $_POST['bdMa'];
                $bdName = $_POST['bdName'];
                $bdSex = $_POST['bdSex'];
                $bdAge = $_POST['bdAge'];
                $bdGroup = $_POST['bdGroup'];
                $bdRegDate = $_POST['bdRegDate'];
                $bdPhone = $_POST['bdPhone'];
                if (empty($bdName)) {
                    $error = "Tên không được để chống";
                }else{
                    $empModel = new EmployeeModel();
                    $empsArr = [
                        'bdMa' => $bdID,
                        'bdName' => $bdName,
                        'bdSex' => $bdSex,
                        'bdAge' => $bdAge,
                        'bdGroup' => $bdGroup,
                        'bdRegDate' => $bdRegDate,
                        'bdPhone' => $bdPhone
                    ];
                    $isInsert = $empModel->AddEmps($empsArr);
                    header("Location: index.php?controller=employee&action=index");
                }
            }
        
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/add.php tương ứng
            require_once 'view/employee/add.php';
            //header("Location: index.php?controller=employee&action=index");
        }
        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
        }

         function delete(){
             $bdID = $_GET['id'];
            //  if (!is_numeric($bdID)){
            //      header("Location: index.php?controller=employee&action=index");
            //      exit();
            //     echo'Con quỷ ';
            // }
          
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $empModel = new EmployeeModel();
            $result4 = $empModel->DeleteEmps($bdID);
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
            // require_once 'view/employee/index.php';
            header("Location: index.php?controller=employee&action=index");
        }
    }



?>