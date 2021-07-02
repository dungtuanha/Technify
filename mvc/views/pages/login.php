<?php if( isset( $data["result"] ) ){ ?>
    <h3><?php
        if($data['result'] == "true"){
            echo '<script type="text/javascript">';
            echo ' alert("Log In Successfull!")';  //not showing an alert box.
            echo '</script>';
            echo "<script> window.location.assign('/index.php?url=Shopping/Show') </script>";
        } elseif($data["result"] == "admin"){
            echo '<script type="text/javascript">';
            echo ' alert("Log In As Amin Successfull!")';
            echo '</script>';
            echo "<script> window.location.assign('/index.php?url=Admin/user') </script>";
        }else{
            echo '<script type="text/javascript">';
            echo ' alert("Fail! Try again!")';  //not showing an alert box.
            echo '</script>';
        }
        ?>
    </h3>
<?php } ?> 