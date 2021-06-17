<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/admin_style.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="\public\js\jquery\jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <form>
         <ul>
                <li class="full title"><h2>Manage Users</h2></li>
                <li class="full break"><hr></li>
        </ul>
    </form>
    
    <ul class="site-width">
        <li class='grey'>
            <span><b>Id</b></span>
            <span><b>email</b></span>
            <div>
                <span><b>password</b></span>
                <span> <i>
                </i> </span>
            </div>
        </li>
        <?php 
        while ($row = mysqli_fetch_array($data['user'])){
            echo '<li class="grey" id ='.$row[0].'>
                <span>'.$row[0].'</span>
                <span contenteditable="false" id="email">'.$row[1].'</span>
                <div>
                    <span contenteditable="false" id="password">'.$row[2].'</span>
                </div>
            </li>';
        }
        ?>
    </ul>

    <?php 
    $data = $_POST['id'];
    mysqli_query($this->con, "");
    ?>
    <button onclick="Add_User()">Add</button>
    <button onclick="Change()">Edit</button>
    <button onclick="remove()">Remove</button>
    <script src="/public/js/admin.js"></script>
</body>
</html>