<?php
class Login extends Controller{
    public function Register(){
        $_SESSION['isLogin'] = "false";
        $model = $this->model("User_Model");
        $page= "login";
        
        if(isset( $_POST["btnRegister"] )){
            $id = rand(1, 9999);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $page="signup";
            $kq = $model->AddAccount($id, $email, $password);
        }

        if(isset( $_POST["btnLogin"] )){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $page = "login";
            $kq = $model->Login_Check($email, $password);
            if($kq == "true"){
                $_SESSION["isLogin"] = "user";
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
            } elseif($kq == "admin"){
                $_SESSION['isLogin'] = "admin";  
            }
        }

        $this->view("master_3", [
            "page"=>$page,
            "result" =>$kq
        ]);
    }
}