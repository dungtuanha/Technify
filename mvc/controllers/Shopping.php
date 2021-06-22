<?php
class Shopping extends Controller{
    public function Show(){
        $model = $this->model("Model");

        $isLogin = $_SESSION['isLogin'];
        
        $this->view("shopping_page", [
            "isLogin"=>$isLogin
        ]);
    }
}

?>