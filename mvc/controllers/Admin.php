<?php
class Admin extends Controller{
    public function user(){
        $model = $this->model("Model");
        
        $user = $model->Account();

        $this->view("admin_user_list",[
            "user"=>$user
        ]);
    }

    public function stuff(){
        $model = $this->model("Model");

        $stuff = $model->Stuff();
        $this->view("admin_stuff_management", [
            "stuff"=>$stuff
        ]);
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

    public function add_stuff(){
        $model = $this->model("Model");
        $id = rand(1,9999);
        $kq = "false";

        if (isset($_POST["add_stuff"])){
            $name = $_POST["name"];
            $price = $_POST["price"];
            $imgUrl = $_POST["imgUrl"];
            $kq = $model->AddStuff($id, $name, $price, $imgUrl);
        }
        $this->view("add_stuff", [
            "kq"=>$kq,
            "id"=>$id
        ]);
    }
}