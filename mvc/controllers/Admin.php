<?php
class Admin extends Controller{
    public function user(){
        $model = $this->model("Model");
        
        $user = $model->Account();

        // if (isset( $_POST["id"] )){
        //     while ($row = mysqli_fetch_array($user)){
        //         if ($_POST["id"] == $row[0]) {
        //             unset($row);
        //         }
        //     }
        // }

        $this->view("admin_user_list",[
            "user"=>$user
        ]);

        // $this->view("test", [
        //     "account"=>$user
        // ]);
    }

    public function add_user(){
        $model = $this->model("Model");
        $id = rand(1,9999);
        $kq = "false";

        if (isset($_POST["add_user"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $kq = $model->AddAccount($id, $email, $password);
        }
        $this->view("add_user", [
            "kq"=>$kq,
            "id"=>$id
        ]);
    }
}