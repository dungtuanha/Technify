<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login_style.css">
    <title>Register or Login?</title>
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">Register or Login?</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input class="form-control" name="email" id="login-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input class="form-control" name="password" id="login-password" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login" name="btnLogin">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" method="POST">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input class="form-control" id="signup-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input class="form-control" id="signup-password" type="password" name="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input class="form-control" id="signup-password-confirm" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup" name="btnRegister">Continue</button>
                </form>
            </div>
        </div>
    </section>
    <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>
    <script src="/public/js/Login.js"></script>
</body>
</html>