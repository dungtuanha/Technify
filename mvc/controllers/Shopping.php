<?php
class Shopping extends Controller{
    public function Show(){
        $model = $this->model("Stuff");

        $stuff = $model->Stuff();

        $isLogin = $_SESSION['isLogin'];
        
        $this->view("shopping_page", [
            "isLogin"=>$isLogin,
            "stuff"=>$stuff
        ]);
    }

    public function Cart(){
        $model = $this->model("Cart");

        $cart = $_SESSION["confirmCart"];
        
        $this->view("shopping_page", [
            "cart"=>$cart
        ]);
    }
}

?>