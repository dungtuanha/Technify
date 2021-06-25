<?php
class User_Model extends DB{
    public function Account(){
        $acc = "SELECT * FROM account";
        return mysqli_query($this->con, $acc);
    }

    public function AddAccount($id, $email, $password){
        $result = False;
        $sql = "INSERT INTO account VALUES ('$id', '$email', '$password')";
        if( mysqli_query($this->con, $sql) ){
                $result = True;
        }

        return json_encode( $result );
    }

    public function Login_Check($email, $password){
        $result = False;

        if ($email == "admin@admin"){
            if ($password == "admin"){
                return "admin";
            }
        }

        $qr = "SELECT email, password FROM account";
        $acc = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($acc)){
            if ($email == $row[0]) {
                if($password == $row[1]){
                    $result = True;
                }
            }
        }
        return json_encode( $result );
    }

    public function RemoveUser($id){
        $qr = "DELETE FROM account WHERE id=".$id;
        mysqli_query($this->con, $qr);
    }
    
}

?>