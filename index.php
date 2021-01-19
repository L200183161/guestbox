<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dasboard | GUESTBOOK TICKET ORDER</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/train.svg" type="image/x-icon">
    <!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Aos.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        /* GLOBAL STYLES
-------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* MARKETING CONTENT
-------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes
------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
-------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
</head>

<body>
    <main role="main">
        <section class="jumbotron text-center" style="background-image: url('https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revision-2019/all-revision-destination/floresH.jpg');background-size: cover;">
            <div class="container" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="jumbotron-heading" style="color:white;">Discover the paradise in Indonesia</h1>
                <p class="lead text-muted" style="color:#f8f9fa!important">with KRETO</p>

                <!-- Book  Ticket Start Here-->
                <p class="text-center">
                    <a class="btn btn-outline-light" href="login.php"><i class="fa fa-train" aria-hidden="true"></i> Ticket</a>
                    <!-- <button class="btn btn-flat" href="login.php" role="button"><a href="login.php"><i class="fa fa-train" aria-hidden="true"></i></button>Book Ticket NOW</a> -->
                </p>
        </section>

        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <div class="row" data-aos="fade" data-aos-duration="2000">
                <div class="alert alert-danger alert alert-dismissable col-md-10 offset-md-1" role="alert">
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <p id="notice" class="d-flex mr-3 mb-0 font-weight-bold" class="btn btn-flat" "><b>Important Notice</b></p>
                    <div class=" media-body">
                        See this link for more information regarding government policy to handle the outbreak of COVID-19
                        <a class="btn-flat" href="https://www.indonesia.travel/gb/en/coronavirus">here</a>
                </div>
            </div>
        </div>

        <div class="container marrketing">
            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <h2>Your Guestbook</h2>
                <?php
                include("./koneksi.php");
                // Function time
                function time_elapsed_string($datetime, $full = false)
                {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);

                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;

                    $string = array(
                        'y' => 'year',
                        'm' => 'month',
                        'w' => 'week',
                        'd' => 'day',
                        'h' => 'hour',
                        'i' => 'minute',
                        's' => 'second',
                    );
                    foreach ($string as $k => &$v) {
                        if ($diff->$k) {
                            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                        } else {
                            unset($string[$k]);
                        }
                    }

                    if (!$full) $string = array_slice($string, 0, 1);
                    return $string ? implode(', ', $string) . ' ago' : 'just now';
                }
                $i = 0;
                // $namasaya = $_SESSION['admin']['username'];
                $sql = "SELECT * FROM guestbook";
                $query = mysqli_query($koneksi, $sql);
                $items = array(1, 2, 3, 4, 5, 6, 7, 8);
                while ($result = mysqli_fetch_array($query)) {
                ?>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="<?= htmlentities($result['name']) ?>"><img src="https://bootdey.com/img/Content/avatar/avatar<?= $items[array_rand($items)] ?>.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="javascript:void(0)" data-toggle="tooltip" title="<?= htmlentities($result['name']) ?>" class="text-body"><?= htmlentities($result['name']) ?> </a></h6>
                                    <p class="text-secondary text-justify">
                                        <?= htmlentities($result['message']) ?>
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)"><?= htmlentities($result['username']) ?></a> <span class="text-secondary font-weight-bold" data-toggle="tooltip" title="<?= htmlentities($result['date']) ?>"><?= time_elapsed_string($result['date']) ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- /Forum List -->
        </div>
        <a class="float-right btn btn-flat" href="./login.php"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Start Conversation Right now!!</a>
        <br>
        <!-- Three columns of text below the carousel -->
        <!-- /.row -->
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
            <div class="col-md-7">
                <h2 class="featurette-heading">The Remnants of Ancient Kingdom <a href="login.php" style="text-decoration: none;"><span class="text-muted">Solo Surakarta</span></h2></a>
                <p class="lead text-justify">Absorb yourself in history with a becak ride through the old city. Historically, Solo has been a center of power in Central Java. From Solonese dance, wayang puppetry through to hand-crafted batik Solo remains a city that prides itself on its artistic traditions of elegance and refinement.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/destinations-thumbnail/Solo-Thumbnail.jpg" alt="Melaka image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">The Wonders of the Ancient Heritage<a href="login.php" style="text-decoration: none;"><span class="text-muted"> Yogyakarta</span></h2></a>
                <p class="lead text-justify">Yogyakarta, together with its twin city Surakarta (Solo), is the cradle of civilization on Java. This city was the seat of power that produced the magnificent temples of Borobudur and Prambanan in the 8th and 9th centuries and the new powerful Mataram kingdom of the 16th and 17th century.
                    Yogyakarta was known with the slogan of “Jogja The Never ending Asia“ for its endless appeals. Today, it is also renowned as “ Jogja Istimewa “, a tagline that elaborates its special values.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/user-generated-content/ugc-july-2020/gb-en/3.jpg" alt="Penang image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
            <div class="col-md-7">
                <h2 class="featurette-heading">One of The Most Haunted Landmarks in Indonesia<a href="login.php" style="text-decoration: none;"><span class="text-muted">Lawang Sewu</span></h2></a>
                <p class="lead text-justify">Abandoned and antique buildings have a tendency to inspire stories. Legends, Myths, Haunted tales of the building's origin, its owners and builders. Indonesia as a whole is home to numerous historical and mystical buildings, many antique and dating back hundreds of years.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/destinations-thumbnail/Semarang-Thumbnail.jpg" alt="Ipoh placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">The Port to paradise.<a href="login.php" style="text-decoration: none;"><span class="text-muted"> Labuan Bajo</span></h2></a>
                <p class="lead text-justify">On the westernmost tip of the Island of Flores, the town of Labuan Bajo sits peacefully with many wonders waiting for you to explore. Labuan Bajo was only a small fishing site that today has flourished to become the gateway to many exotic destinations in East Nusa Tenggara.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/destinations-thumbnail/Labuan-Bajo-Thumbnail.jpg" alt="Ipoh placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
            <div class="col-md-7">
                <h2 class="featurette-heading">The Handcrafts of the Gods<a href="login.php" style="text-decoration: none;"><span class="text-muted"> Bali Indonesia</span></h2></a>
                <p class="lead text-justify">Also known as the Land of the Gods, Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity. It is also famous for surfers’ paradise! Bali enchants with its dramatic dances and colorful ceremonies, its arts, and crafts, to its luxurious beach resorts and exciting nightlife. And everywhere, you will find intricately carved temples.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/destinations-thumbnail/Bali-Thumbnail.jpg" alt="Ipoh placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">And lastly, this one.<a href="login.php" style="text-decoration: none;"><span class="text-muted"> Raja Ampat</span></h2></a>
                <p class="lead text-justify">Find a pristine paradise where Mother Nature and warm friendly people welcome you with all the exceptional wonders in Raja Ampat, the islands-regency in West Papua Province. </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="https://www.indonesia.travel/content/dam/indtravelrevamp/user-generated-content/ugc-july-2020/gb-en/6.jpg" alt="Ipoh placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <a class="float-right" href="#"> <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
            <p>&copy; Donny Rizal &middot; <a href="#">Privacy</a> &middot; <a href="#notice">Terms</a></p>
        </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
    <!-- Aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>