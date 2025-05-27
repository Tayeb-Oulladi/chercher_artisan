<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Artisan indépendant</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                            <h2>Liste des artisan</h2>
                        </div>
                        <div class="col-12">
                            <a href="">artisan</a>
                            <a href="">indépendant</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            
            

    <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos artisans</p>
            <h2>Choisissez l'artisan dont vous avez besoin</h2>
        </div>
        <div class="container mb-4">
    <form method="GET" class="row">
        <div class="col-md-5">
            <input type="text" name="profession" class="form-control" placeholder="Rechercher par métier (ex: électricien)">
        </div>
        <div class="col-md-5">
            <input type="text" name="ville" class="form-control" placeholder="Rechercher par wilaya (ex: Oran)">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
        </div>
    </form>
</div>

        <div class="row">
        <?php
// Connexion à la base de données (à adapter à ta configuration)
$pdo = new PDO('mysql:host=localhost;dbname=artisan_finder', 'root', '');

// Exécution de la requête
// Préparation des filtres
$profession = isset($_GET['profession']) ? trim($_GET['profession']) : '';
$ville = isset($_GET['ville']) ? trim($_GET['ville']) : '';

$query = "SELECT * FROM artisans WHERE 1=1";
$params = [];

if (!empty($profession)) {
    $query .= " AND profession LIKE :profession";
    $params[':profession'] = '%' . $profession . '%';
}

if (!empty($ville)) {
    $query .= " AND ville LIKE :ville";
    $params[':ville'] = '%' . $ville . '%';
}

$stmt = $pdo->prepare($query);
$stmt->execute($params);

// Boucle sur chaque artisan
while ($artisan = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
    <div class="col-lg-3 col-md-6">
        <div class="team-item">
            <div class="team-img">
                <img src="img/<?= htmlspecialchars($artisan['photo']) ?>" alt="Photo Artisan" style="width:100%; height:250px; object-fit:cover;">
            </div>
            <div class="team-text">
                <h2><?= htmlspecialchars($artisan['nom']) ?></h2>
                <p><?= htmlspecialchars($artisan['profession']) ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($artisan['ville']) ?> - <?= htmlspecialchars($artisan['adresse']) ?></p>
                <p><i class="fas fa-phone-alt"></i> <?= htmlspecialchars($artisan['telephone']) ?></p>
            </div>
            <div class="team-social">
                <?php if (!empty($artisan['facebook'])): ?>
                    <a class="social-fb" href="<?= htmlspecialchars($artisan['facebook']) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if (!empty($artisan['instagram'])): ?>
                    <a class="social-in" href="<?= htmlspecialchars($artisan['instagram']) ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if (!empty($artisan['whatsapp'])): ?>
                    <a class="social-wa" href="https://wa.me/<?= htmlspecialchars($artisan['whatsapp']) ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>



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
