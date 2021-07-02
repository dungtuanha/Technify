<?php
class Admin extends Controller{
    public function user(){
        $user = $this->model("User_Model");

        if(isset($_COOKIE['change_user_id'])){
            if(isset($_COOKIE['edit_email'])){
                $user->updateUser($_COOKIE['change_user_id'], 'email', $_COOKIE['edit_email']);
            } else if (isset($_COOKIE['edit_password'])){
                $user->updateUser($_COOKIE['change_user_id'], 'password', $_COOKIE['edit_password']);
            }
        }

        if(isset($_COOKIE["remove_user_id"])){
            $status = $user->RemoveUser($_COOKIE["remove_user_id"]);
        } else {
            $status = "no session";
        }
        
        $account = $user->Account();

        $this->view("admin_user_list",[
            "user"=>$account,
            "status"=>$status
        ]);
    }

    public function stuff(){
        $stuff = $this->model("Stuff_Model");
        
        if(isset($_COOKIE['change_stuff_id'])){
            if(isset($_COOKIE['edit_stuff_name'])){
                $stuff->updateStuff($_COOKIE['change_stuff_id'], 'name', $_COOKIE['edit_stuff_name']);
            } else if (isset($_COOKIE['edit_stuff_price'])){
                $stuff->updateStuff($_COOKIE['change_stuff_id'], 'price', Number($_COOKIE['edit_stuff_price']));
            }
        }

        if(isset($_SESSION["remove_stuff_id"])){
            $status = $stuff->RemoveUser($_SESSION["remove_stuff_id"]);
        } else {
            $status = "no session";
        }


        $stock = $stuff->Stuff();
        $this->view("admin_stuff_management", [
            "stuff"=>$stock
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