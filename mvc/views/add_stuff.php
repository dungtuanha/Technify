<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Add Stuff</title>
</head>
<body>
    <?php 
        if($data['kq'] == "true"){
            echo '<script type="text/javascript">';
            echo ' alert("Add Stuff Successfull!")';
            echo '</script>';
            echo "<script> window.location.assign('/index.php?url=Admin/stuff') </script>";
        }
    ?>
    <div class="container">

    <form class="well form-horizontal" action="" method="POST" id="registration_form" style="text-align: center;">
        <fieldset>

    
            <legend>Add Stuff</legend>
            <div class="form-group">
                <label class="col-md-4 control-label">Id</label>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <span><?php echo $data["id"] ?></span>
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="name" maxlength="30" placeholder="Name" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Price</label>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="price" maxlength="16" placeholder="400" class="form-control" type="number">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">image Url</label>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="imgUrl" class="form-control" type="text">
                    </div>
                </div>
            </div>       
                
            <div class="alert alert-success" role="alert" style=" display: none;" id="registration_success">Registration Successfully Completed.</div>
            

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" name="add_stuff" class="btn btn-primary login-button">Add</button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>
</body>
</html>