<?php
session_start();
include("../koneksi.php");
$editid = $_GET['id'];
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='../user/login.php?pesan=dilarang'</script>";
} else {
    // cek apakah tombol daftar sudah diklik atau blum?
    if (isset($_POST['ganti'])) {

        // ambil data dari formulir
        $editid = $_GET['id'];
        $username = $_SESSION['admin']['username'];
        $name = mysqli_escape_string($koneksi, $_POST['name']);
        $email = mysqli_escape_string($koneksi, $_POST['Email']);
        $address = mysqli_escape_string($koneksi, $_POST['address']);
        $message = mysqli_escape_string($koneksi, $_POST['message']);

        // cek apakah user telah melakukan pemesanan atau belum
        $query = mysqli_query($koneksi, "SELECT id FROM guestbook WHERE id='$editid'");
        $row = mysqli_num_rows($query);
        if ($row == 0) {
            echo "<script>window.location='./daftar.php?pesan=beli#pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "UPDATE guestbook SET name='$name', email='$email', address='$address', message='$message', username='$username' WHERE id='$editid'";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                // kalau berhasil alihkan ke halaman pemesanan
                echo "<script>window.location='./daftar.php?pesan=editsukses#pemesanan';</script>";
            } else {
                echo "<script>window.location='./daftar.php?pesan=editgagal#pemesanan';</script>";
            }
        }
    } else {
        echo mysqli_error($koneksi);
        // echo "<script>window.location='./';</script>";
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>GUESTBOOK - Chats Edit <?php echo $editid; ?> </title>
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

        <!-- JQuery DataTable Css -->
        <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Morris Chart Css-->
        <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../assets/css/themes/theme-blue.css" rel="stylesheet" />

        <!-- CSS manual -->
        <link href="../manual.css" rel="stylesheet">

        <!-- Sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
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
                <p>Wait for a moment.. ...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="./">Admin - GUESTBOOK</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
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
                        <img src="../assets/images/programmer.png" width="60" height="60" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b style="text-transform: uppercase;"><?php echo htmlentities($_SESSION['admin']['username']); ?></b>
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
                        <li>
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="daftar.php">
                                <i class="material-icons">assignment</i>
                                <span>Chats View</span>
                            </a>
                        </li>
                        <li>
                            <a href="./user.php">
                                <i class="material-icons">people</i>
                                <span>User List</span>
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
                    <h2>Edit <?php echo htmlentities($editid) ?></h2>
                </div>
                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2>
                                    Edit your message in here
                                </h2>
                            </div>
                        </div>
                    </div>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM guestbook WHERE id='$editid'");
                    $row = mysqli_num_rows($query);
                    if ($row > 0) {
                        $data = mysqli_fetch_array($query);
                    ?>
                        <div class="content container-fluid">
                            <div id="message" class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form action="" method="POST">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Message</h2>
                                                <small>Edit your message in here</small>
                                            </div>
                                            <div class="body">
                                                <!-- <h2 class="card-inside-title">Message</h2> -->
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <!-- <div class="form-group">
                                                            <label hidden for="id" class="col-sm-2 control-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-line">
                                                                    <input hidden type="text" class="form-control" id="id" name="id" placeholder="id" value="<?= $data['id'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= htmlentities($data['name']) ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-line">
                                                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?= htmlentities($data['email']) ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address" class="col-sm-2 control-label">Address</label>

                                                            <div class="col-sm-10">
                                                                <div class="form-line">
                                                                    <textarea class="form-control" id="address" name="address" rows="3"><?= htmlentities($data['address']) ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message" class="col-sm-2 control-label">Message</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-line">
                                                                    <textarea class="form-control" id="message" name="message" rows="3"><?= htmlentities($data['message']) ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-offset-10 col-sm-10">
                                                        <button type="submit" name="ganti" class="btn btn-primary waves-effect">
                                                            <i class="material-icons">send</i>
                                                            <span> Edit Your Chat </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    <?php
                    }
    ?>

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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    </body>

    </html>
<?php
}
?>