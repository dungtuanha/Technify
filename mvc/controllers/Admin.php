<?php
class Admin extends Controller{
    public function user(){
        $user = $this->model("User");

        if($_SESSION["edit_email"]){
            
        }

        if($_SESSION["remove_user_id"]){
            $user->RemoveUser($_SESSION["remove_user_id"]);
        }
        
        $account = $user->Account();

        $this->view("admin_user_list",[
            "user"=>$account
        ]);
    }

    public function stuff(){
        $model = $this->model("Stuff");
        if($_SESSION["remove_stuff_id"]){
            $model->RemoveStuff($_SESSION['remove_stuff_id']);
        }

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