<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nos services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            
            @include('layout.topbar')
        
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            
            @include('layout.nav_bar')
            
            
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Nos services</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Accueil</a>
                            <a href="">Nos services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Nos services</p>
                        <h2>Nous fournissons des services</h2>
                    </div>
                    <div class="row">
    <?php
    // Connexion à la base de données
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=artisan_finder', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupération des professions
        $stmt = $pdo->query("SELECT name, description, photo FROM professions");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-item">
                <div class="service-img">
                    <img src="img/<?= htmlspecialchars($row['photo']) ?>" alt="Image">
                    <div class="service-overlay">
                        <p><?= htmlspecialchars($row['description']) ?></p>
                    </div>
                </div>
                <div class="service-text">
                    <h3><?= htmlspecialchars($row['name']) ?></h3>
                    <a class="btn" href="img/<?= htmlspecialchars($row['photo']) ?>" data-lightbox="service">+</a>
                </div>
            </div>
        </div>
    <?php
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
    ?>
</div>

                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- FAQs Start -->
            @include('layout.question')
            <!-- FAQs End -->


            <!-- Footer Start -->
            
            @include('layout.footer')
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
