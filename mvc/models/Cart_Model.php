<?php
class Cart_Model extends DB {
    public function get_cart_list(){
        $sql = "SELECT * FROM cart";
        return mysqli_query($this->con, $sql);
    }

    public function Add_Cart($email, $item_list, $total_bill){
        $exist == false;
        $cart_list = mysqli_query($this->$con, "SELECT id FROM cart");
        while ($exist == false){
            $id = rand(1000, 9999);
            while ($row = $cart_list.fetch_assoc()){
                if ($id = $row["id"]){
                    $exist = true;
                }
            }
        }

        $status = "Pending..." ;
        
        $sql = "INSERT INTO cart VALUES ('$id', '$email', '$item_list', '$total_bill')";
    }
}

?>