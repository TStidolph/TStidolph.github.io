<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Coursework Requirements</title>
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
    <main class="page">
        <section class="clean-block about-us">
            <h2 class="text-center" style="padding: 20px;">CMP204 Requirements Page</h2>
            <div class="table-responsive" style="margin-top: 0;">
                <table class="table">
                    <thead>
                        <tr>
                            <th><strong>Requirement</strong></th>
                            <th><strong>How did you meet this requirement?</strong></th>
                            <th><strong>File name(s), line no.</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A clear use of HTML5</td>
                            <td>Each page built with HTML5.</td>
                            <td>index.php</td>
                        </tr>
                        <tr>
                            <td>Use of the Bootstrap framework providing a responsive layout</td>
                            <td>Bootstrap used on each page which scale appropriately.</td>
                            <td>index.php</td>
                        </tr>
                        <tr>
                            <td>Use of JavaScript to manipulate the DOM based on an event</td>
                            <td>Button on index.php uses JavaScript to hide a div.</td>
                            <td>custom.js</td>
                        </tr>
                        <tr>
                            <td>JavaScript loading of dynamically changing information</td>
                            <td>Clock footer updated using JavaScript.</td>
                            <td>custom.js</td>
                        </tr>
                        <tr>
                            <td>Use of jQuery in conjunction with the DOM</td>
                            <td>Buttons on index.php use jQuery to toggle visibility of divs.</td>
                            <td>custom.js</td>
                        </tr>
                        <tr>
                            <td>Use of a jQuery plugin to enhance your application</td>
                            <td>Use of RTOP video player jQuery plugin.</td>
                            <td>custom.js<br></td>
                        </tr>
                        <tr>
                            <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td>
                            <td>News file fetched using AJAX.</td>
                            <td>index.php</td>
                        </tr>
                        <tr>
                            <td>Use of the jQuery AJAX function</td>
                            <td>Cell 4</td>
                            <td>Cell 4</td>
                        </tr>
                        <tr>
                            <td>User login functionality (PHP/MySQL)</td>
                            <td>Log in from login.php, details on SQL database.</td>
                            <td>login.php<br></td>
                        </tr>
                        <tr>
                            <td>Admin section of the website (PHP/MySQL)</td>
                            <td>Admin only page to edit usernames/delete users.</td>
                            <td>admin.php</td>
                        </tr>
                        <tr>
                            <td>Ability to select, add, edit and delete information from a database (PHP/MySQL)</td>
                            <td>Select: Log-in, Add: Registration, Edit: Admin username change, Delete: Admin user deletion.</td>
                            <td>login.php, registration.php, admin.php</td>
                        </tr>
                        <tr>
                            <td>Appropriate consideration of relevant laws</td>
                            <td>No user data is collected therefore no GDPR concerns.</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>Security measures</td>
                            <td>Prepared statements and password hashing used to protect against SQL injection and man in the middle attacks.</td>
                            <td>registration.php</td>
                        </tr>
                        <tr>
                            <td>SQL queries should be written as prepared statements</td>
                            <td>Prepared statements used.</td>
                            <td>validate-login.php</td>
                        </tr>
                        <tr>
                            <td>Passwords should be salted and hashed</td>
                            <td>Password input salted and hashed.</td>
                            <td>validate-login.php</td>
                        </tr>
                        <tr>
                            <td>Validation of user input</td>
                            <td>User input cleaned up.</td>
                            <td>validate-login.php</td>
                        </tr>
                        <tr>
                            <td>Any other relevant security features</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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