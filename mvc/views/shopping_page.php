<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/cart.css">
    <script src="/public/js/cart.js"></script>
    <title>Shopping Time!!</title>
</head>
<body>
    <nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">
                    Cart(<span class="total-count"></span>)
                </button>
                <button class="clear-cart btn btn-danger">
                    Clear Cart
                </button>
            </div>
        </div>
    </nav>

    <?php
    while ($row = mysqli_fetch_array($data['stuff'])){
        echo '<div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="'.$row[3].'" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-tilte">'.$row[1].'</h4>
                            <p class="card-text">Price: '.$row[2].'</p>
                            <a href="#" data-name="'.$row[1].'" data-price="'.$row[2].'" class="add-to-cart btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>


    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"> Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="CLose">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="show-cart table">

                    </table>
                    <div>Total price: <span class="total-cart"> VND</span></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button onclick="SaveCart()" type="button" class="btn btn-primary">Order Now</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>