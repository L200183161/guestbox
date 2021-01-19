<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registration | GUESTBOOK TICKET ORDER</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/train.svg" type="image/x-icon">
    <!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />

    <!-- CSS manual -->
    <link href="manual.css" rel="stylesheet">

    <!-- CSS sweetalert -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo text-center">
            <img src="assets/images/train.svg" alt="ini gambar kereto" width="72" height="72">
            <a title="Homepage" style="color: #2196F3;"><b>GUESTBOOK</b></a>
            <small>TICKET ORDER</small>
        </div>
        <div style="border-radius: 15px 15px 0 0 !important;" class="card">
            <div class="body">
                <form id="registrasi" action="cek_registrasi.php" method="POST">
                    <div class="msg">Create your account here</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmation Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-blue">
                            <label id="showhide" for="rememberme">Show Password</label>
                        </div>
                        <div class="col-xs-4">
                            <button style="margin: 0;" type="submit" class="tombol" name="registration"><i class="glyphicon glyphicon-log-in"></i> Sign Up</button>
                            <!-- <input style="margin: 0;" type="submit" name="registration" class="tombol" value="Sign Up"> -->
                        </div>
                    </div>

                    <p class="text-muted text-center"><span style="color: red !important; display: inline; float: none;">*</span> By clicking Sign Up, I agree the Terms and Conditions</p>
                    <p class="mt-3 mb-3 text-muted text-center">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>Having Trouble? <a style="color:red;" href="mailto:donnyrizaladhip@rocketmail.com?subject=Hello%20sir%2C%20help%20me%20plz">Contact Us</a></p>
    </footer>
    <!-- Show Password -->
    <script>
        (function() {

            var showHide = function(element, field) {
                this.element = element;
                this.field = field;
                this.toggle();
            };

            showHide.prototype = {
                toggle: function() {
                    var self = this;
                    self.element.addEventListener("change", function() {
                        if (self.element.checked) {
                            self.field.setAttribute("type", "text");
                        } else {
                            self.field.setAttribute("type", "password");
                        }
                    }, false);
                }
            };

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.querySelector("#rememberme"),
                    password = document.querySelector("#password"),
                    form = document.querySelector("#registrasi");

                var toggler = new showHide(checkbox, password);
            });

        })
        ();
        (function() {

            var showHide = function(element, field) {
                this.element = element;
                this.field = field;
                this.toggle();
            };

            showHide.prototype = {
                toggle: function() {
                    var self = this;
                    self.element.addEventListener("change", function() {
                        if (self.element.checked) {
                            self.field.setAttribute("type", "text");
                        } else {
                            self.field.setAttribute("type", "password");
                        }
                    }, false);
                }
            };

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.querySelector("#rememberme"),
                    password = document.querySelector("#password2"),
                    form = document.querySelector("#registrasi");

                var toggler = new showHide(checkbox, password);
            });

        })
        ();
    </script>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>

    <!-- Sweetalert Js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "usernameada") {
            echo
            "<script type='text/javascript'>
                swal({
                title: 'Username has already registered!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
        } else if ($_GET['pesan'] == "salahpassword") {
            echo "<script type='text/javascript'>
                swal({
                title: 'Password is not matched',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                $(document).ready(function(){
                    $('select:not(.swal2-select)').formSelect();
                });
        </script>";
        } else if ($_GET['pesan'] == "berhasil") {
            echo "<script type='text/javascript'>
                swal({
                title: 'User succesfully registered!',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
        }
    } ?>
</body>

</html>