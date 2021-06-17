<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technify</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel='stylesheet' href="/public/css/shopping_cart.scss">
    <link rel='stylesheet' href="/public/css/login_false.css">
    <script data-main="/public/js/cart.js" src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
    <script src="/public/js/jquery/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('a[href*=#]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });
    </script>
</head>

<body>
    <section id="section01" class="demo">
        <header>
            <a id="slogan">
                <h1>Finding Technoly Stuff</h1>
                <br>
                <h1>Makes You Look Rich</h1>
                <br>
                <h1>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;👇🏻👇🏻👇🏻</h1>
            </a>
            <nav> 
                <a href="/" id="logo">
                    <h4><b>Technify</b></h4>
                </a>
                <?php
                if ($_SESSION['isLogin'] == 'user'){
                    echo '<a href="/index.php?url=Login/Register" onclick="logout()">
                        <h4><b>Logout</b></h4>
                    </a>';
                }
                ?>
            </nav>

        </header>

        <a href="#section02"></a>
        <video autoplay muted loop id="myVideo">
                <source src="/public/css/video/D.mp4" type="video/mp4">
            </video>

    </section >

    <?php
    if($_SESSION["isLogin"] == "user"){
        require_once "./mvc/views/pages/home_true.php";
    }else{
        require_once "./mvc/views/pages/home_false.php";
    }
    ?>

        <!-- <section id="section03" class="demo">
            <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/697693101&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

            </section> -->

    <section id="section04" class="demo">
        <a id="tuned">
            <h1>STAY TUNED🤘🏻!!!</h1>
        </a>
        <a id="logo4">
            <h4>moodify.</h4>
        </a>
        <a id="represent">
            <h5>&copy;2019</h5>
        </a>

        <video autoplay muted loop id="Video">
            <source src="/public/css/video/f.mp4" type="video/mp4">
        </video>

    </section>

</body>

</html>