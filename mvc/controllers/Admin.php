<?php

// http://localhost/live/Home/Show/1/2

class Admin extends Controller{

    //private $empl = $this->model("EmployeeModel");
    // Must have SayHi()
    function Show(){
        $this->view("login");
    }
    function Dash(){
        $model = $this->model("EmployeeModel");
        $data = $model->GetEmployees();
        $this->view("dash",["data"=>$data]);

    }
    function Edit($id){
       if(isset($_POST['crud-submit-edit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $vitri = $_POST['position'];

            $model = $this->model("EmployeeModel");
            $model->EditEmployee($id,$name,$email,$phone,$vitri);
        }
        
        header('Location: ../Dash');

    }
    function Add(){

        if(isset($_POST['crud-submit-add'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $vitri = $_POST['position'];

            $model = $this->model("EmployeeModel");
            $model->InsertEmployee($name,$email,$phone,$vitri);
        }
        
        header('Location: ../Admin/Dash');
        
    }
    function Delete($id){
        $model = $this->model("EmployeeModel");
        $model->DeleteEmployee($id);
        header('Location: ../Dash');
    }
    function Login(){ 
        
        $model = $this->model("AccountModel");

        if ( isset($_POST["btn-login"]) ) {
        // lấy thông tin người dùng
            $user = $_POST['email-address'];
            $pass = $_POST['password'];
            
            
            
            $query = $model->Login($user,$pass);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
                echo "tên đăng nhập hoặc mật khẩu không đúng !";
            }else{
                
                $_SESSION['username'] = $user;
                
                header('Location: ../Admin/Dash');
            }
            
        
        }
        else{
            echo "kkk";
        }
    }

    function Logout(){
        session_destroy();
        header('Location: ../Home');
    }
}
?>