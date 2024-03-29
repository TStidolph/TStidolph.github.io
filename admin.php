<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Controls</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/rtop.videoPlayer.1.0.2.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.html">Muse Fanpage</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="requirements.php">Requirements</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Administration</h2>
                </div>
            </div>
            <form method="post" action="admin-change.php">
                <div class="form-group"><label>Username</label><input class="form-control" type="text" id="existing-name" name="username"></div>
                <div class="form-group"><label>New Username</label><input class="form-control" type="text" id="new-name" name="newname"></div><button class="btn btn-warning btn-block" id="change-name">Change Name<br></button>
                <p class="text-center" id="change-output" style="margin-top: 10px;margin-bottom: 0px;"></p>
            </form>
            <form method="post" action="admin-delete.php">
                <div class="form-group"><label>Username</label><input class="form-control" type="text" name="username"></div><button class="btn btn-danger btn-block" id="delete">Delete</button></form>
        </section>
    </main>
    <footer>
        <div class="row">
            <div class="col text-center align-self-baseline">
                <p id="clock" style="margin-bottom: 0.1rem;font-size: 1.2rem;height: 100%;">Current time (GMT):&nbsp;</p>
            </div>
            <div class="col"><a href="logout.php"><button class="btn btn-secondary float-right" id="log-out" type="button" style="margin: 20px;margin-right: 20px;margin-top: 0px;">Log Out</button></a></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/rtop.videoPlayer.1.0.2.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>