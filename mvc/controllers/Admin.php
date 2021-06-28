<?php
class Admin extends Controller{
    public function user(){
        $user = $this->model("User_Model");

        if(isset($_SESSION["edit_email"])){
            $user->updateUser($_SESSION["user_id"], "id", $_SESSION["edit_email"]);
        } else if (isset($_SESSION["edit_password"])){
            $user->updateUser($_SESSION["user_id"], "id", $_SESSION["edit_password"]);
        }

        if(isset($_SESSION["remove_user_id"])){
            $status = $user->RemoveUser($_SESSION["remove_user_id"]);
        } else {
            $status = "no session";
        }
        $_SESSION['alo'] = 'hehe';
        
        $account = $user->Account();

        $this->view("admin_user_list",[
            "user"=>$account,
            "status"=>$_SESSION['alo']
        ]);
    }

    public function stuff(){
        $model = $this->model("Stuff_Model");
        if($_SESSION["remove_stuff_id"]){
            $model->RemoveStuff($_SESSION['remove_stuff_id']);
        }

        $stuff = $model->Stuff();
        $this->view("admin_stuff_management", [
            "stuff"=>$stuff
        ]);
    }

    public function add_user(){
        $model = $this->model("User_Model");
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
        $model = $this->model("Stuff_Model");
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