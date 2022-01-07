<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/headerlogo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form action="App/Controllers/AuthenticationController.php" method="POST">
                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">UserName</label>
                            <input type="username" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" type="submit" name="login" value="login">Login</button>
                    </form>
                    <p class="mb-0 text-muted">Don't have account yet? <a href="signup.php">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>