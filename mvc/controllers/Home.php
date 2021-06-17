<?php
class Home extends Controller{
    public function Show(){
        $model = $this->model("Model");

        $isLogin = $_SESSION['isLogin'];
        
        $this->view("master_1", [
            "Page"=>"home",
            "isLogin"=>$isLogin
        ]);
    }
}

?>