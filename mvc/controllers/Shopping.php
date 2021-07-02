<?php
class Shopping extends Controller{
    public function Show(){
        $model = $this->model("Stuff_Model");

        $stuff = $model->Stuff();

        $isLogin = $_SESSION['isLogin'];
        
        $this->view("shopping_page", [
            "isLogin"=>$isLogin,
            "stuff"=>$stuff
        ]);
    }

    public function Cart(){
        $model = $this->model("Cart_Model");

        $cart = $_SESSION["confirmCart"];
        
        $this->view("cart_page", [
            "cart"=>$cart
        ]);
    }
}

?>