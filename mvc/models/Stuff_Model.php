<?php
class Stuff_Model extends DB {
    public function Stuff(){
        $quotes = "SELECT * FROM stuff";
        return mysqli_query($this->con, $quotes);
    }

    public function AddStuff($id, $name, $price, $imgUrl){
        $result = False;
        $sql = "INSERT INTO stuff VALUES ('$id', '$name', '$price', '$imgUrl')";
        if( mysqli_query($this->con, $sql) ){
                $result = True;
        }

        return json_encode( $result );
    }

    public function RemoveStuff($id){
        $qr = "DELETE FROM stuff WHERE id=".$id;
        mysqli_query($this->con, $qr);
    }
}

?>