<?php
session_start();
function greetingWord()
{
    date_default_timezone_set('Asia/Jakarta');
    $hour = date("G");

    if ($hour > 0 && $hour < 24) {
        if ($hour >= 0 && $hour < 6) {
            echo "<p>Morning sunshine 🌞 <b> <br> Have a nice day 🤗 <b></p>";
        } else if ($hour >= 6 && $hour < 12) {
            echo "<p>Good Morning. Have a nice day 🤗 </p>";
        } else if ($hour >= 12 && $hour < 18) {
            echo "<p>Good Afternoon. Have a nice day 🤗 </p>";
        } else {
            echo "<p>Good evening. Have a nice dream tho 💤 </p>";
        }
    }
}
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php?pesan=dilarang'</script>";
} else {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>GUESTBOOK - Ticket Ordering</title>
        <!-- Favicon-->
        <link rel="icon" href="../assets/images/train.svg" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />

        <!-- CSS sweetalert -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </head>

    <body class="theme-blue">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Wait for a moment please...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <div class="bg-1"></div>
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="./">USER - GUESTBOOK</a>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../assets/images/programmer.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b><?php echo $_SESSION['user']['username']; ?></b>
                            <br>
                            <?php echo $_SESSION['user']['username']; ?>
                        </div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li role="separator" class="divider"></li>
                                <li><a href="../logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="./view.php">
                                <i class="material-icons">chat</i>
                                <span>Your Messages</span>
                            </a>
                        </li>
                        <li class="header">ACCOUNT</li>
                        <li>
                            <a href="../logout.php">
                                <i class="material-icons col-red">power_settings_new</i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        <p>&copy; Donny Rizal &middot; <a href="#">Privacy</a> &middot; <a href="#notice">Terms</a></p>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->

            <!-- #END# Right Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>

                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2>
                                    <?= $_SESSION['user']['username'] ?> <small>Sign your name here, if you were here</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p class="align-justify"><?php echo greetingWord(); ?> </p>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Browser Usage -->
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Today
                                    <small><?php echo date("l, d F Y"); ?></small>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="content container-fluid">
                <div id="message" class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="sendmessage.php" method="POST">
                            <div class="card">
                                <div class="header">
                                    <h2>Message</h2>
                                    <small>Type your message here</small>
                                </div>
                                <div class="body">
                                    <!-- <h2 class="card-inside-title">Message</h2> -->
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="col-sm-2 control-label">Address</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message" class="col-sm-2 control-label">Message</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-offset-10 col-sm-10">
                                            <button type="submit" name="kirim" class="btn btn-primary waves-effect">
                                                <i class="material-icons">send</i>
                                                <span> Send Your Message </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../assets/plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../assets/plugins/raphael/raphael.min.js"></script>
        <script src="../assets/plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="../assets/plugins/flot-charts/jquery.flot.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.resize.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.pie.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.categories.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.time.js"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

        <!-- Custom Js -->
        <script src="../assets/js/admin.js"></script>
        <script src="../assets/js/pages/index.js"></script>

        <!-- Demo Js -->
        <script src="../assets/js/demo.js"></script>

        <!-- Sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "editsukses") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Your order has succesfully edited',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "sukses") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Message added!',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "editgagal") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Failed to edit, something is wrong!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "gagal") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Failed to send message!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "error") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Please try again once more.!',
                type: 'info',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "beli") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Make sure you make a message first!',
                type: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "edit") {
                echo "<script type='text/javascript'>
                swal({
                title: 'You already have ordered! If there's something wrong Edit here',
                type: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            }
        }
        ?>
    </body>

    </html>
<?php
}
?>