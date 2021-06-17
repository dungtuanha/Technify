<?php if( isset( $data["result"] ) ){ ?>
    <h3><?php
        if($data['result'] == "true"){
            echo '<script type="text/javascript">';
            echo ' alert("Sign In Successfull!")';  //not showing an alert box.
            echo '</script>';
        } else{
            echo '<script type="text/javascript">';
            echo ' alert("Fail! Try again!")';  //not showing an alert box.
            echo '</script>';
        }
        ?>
    </h3>
<?php } ?>