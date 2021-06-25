<?php
class Cart_Model extends DB {
    public function get_cart_list(){
        $sql = "SELECT * FROM cart";
        return mysqli_query($this->con, $sql);
    }

    public function Add_Cart($email, $item_list){
        $cart_list = mysqli_query($this->$con, "SELECT id FROM cart");
        while ($exist == true){
            $exist = false;
            $id = rand(1000, 9999);
            while ($row = $cart_list.fetch_assoc()){
                if ($id = $row["id"]){
                    $exist = true;
                }
            }
        }

        $sql = "INSERT INTO cart VALUES ('$id', '$email', '$item_list')";
    }
}

?>