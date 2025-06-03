<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Khdamli</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            @include('layout.topbar')
            <!-- Top Bar End -->
            
            <!-- Nav Bar Start -->
            
            @include('layout.nav_bar')
            
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slide1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Travail soigné</p>
                            <h1 class="animated fadeInLeft">tu cherches un plombier !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Savoir-faire reconnu</p>
                            <h1 class="animated fadeInLeft">ou bien un menuiserie !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Service fiable</p>
                            <h1 class="animated fadeInLeft">ou un électricien !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide4.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Respect des délais</p>
                            <h1 class="animated fadeInLeft">un peintre !</h1>
                           
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide5.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Qualité garantie</p>
                            <h1 class="animated fadeInLeft">ou bien un maçon !</h1>
                            <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">obtenir un devis</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travailleur expert</h3>
                                    <p>Nous mettons notre expertise au service de vos projets pour garantir un travail de qualité, rapide et fiable</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travail de qualité</h3>
                                    <p>Chaque mission est réalisée avec soin, rigueur et souci du détail pour un résultat à la hauteur de vos attentes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>7/7 Support</h3>
                                    <p>Notre équipe est disponible tous les jours pour répondre à vos problèmes et vous accompagner sans interruption</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image" style="height: 500px;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Bienvenue chez Khdamlii</p>
                                <h2>Trouver un artisan facilement </h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Khdamlii est une plateforme 100% algérienne conçue pour mettre en relation les particuliers et les artisans qualifiés à travers toute l'Algérie. Que vous ayez besoin d’un plombier, d’un électricien, d’un menuisier ou tout autre professionnel du bâtiment ou des services, notre objectif est de vous aider à trouver rapidement et facilement l’artisan qu’il vous faut, près de chez vous.
                                </p>
                                <p>
                                    Nous croyons en la valeur du travail artisanal local, en la confiance et en la qualité du service rendu. Chaque artisan inscrit est soigneusement sélectionné pour vous garantir une expérience fiable, transparente et professionnelle.
                                </p>
                                <a class="btn" href="art_ind.blade.php">artisan indépendant</a>
                                <a class="btn" href="art_soc.blade.php">société des artisans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">107</h2>
                                        <p>artisan indépendant</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">42</h2>
                                        <p>Société d'artisan</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">685</h2>
                                        <p>Clients satisfaits</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Nos services</p>
                        <h2>Nous fournissons des services</h2>
                    </div>
                    <div class="row">
            @foreach($professions as $profession)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/' . $profession->photo) }}" alt="{{ $profession->name }}">
                            <div class="service-overlay">
                                <p>{{ $profession->description }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ $profession->name }}</h3>
                            <a class="btn" href="{{ asset('img/' . $profession->photo) }}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://youtu.be/x3QbwJzrQaU?si=7uulP-3aVgpvi957" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->

            <!-- FAQs Start -->
            @include('layout.question')
            <!-- FAQs End -->

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="testimonial-slider-nav">
    <div class="slider-nav"><img src="{{ asset('img/1.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="{{ asset('img/4.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="{{ asset('img/2.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="{{ asset('img/6.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="{{ asset('img/3.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="{{ asset('img/5.jpeg') }}" alt="Testimonial" class="rounded-circle"></div>
</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <!-- Artisan 1 -->
                    <div class="slider-item">
                        <h3>Mohamed Lounis</h3>
                        <h4>Électricien</h4>
                        <p>Grâce à cette plateforme, j’ai pu toucher plus de clients dans ma région. Les demandes sont sérieuses et régulières. Un vrai coup de boost pour mon activité.</p>
                    </div>
                    <!-- Artisan 2 -->
                    <div class="slider-item">
                        <h3>Yasmine Amrani</h3>
                        <h4>Décoratrice d’intérieur</h4>
                        <p>J’ai apprécié la simplicité d’inscription et la manière dont mon profil a été mis en avant. J’ai reçu plusieurs contacts dès les premières semaines.</p>
                    </div>
                    <!-- Artisan 3 -->
                    <div class="slider-item">
                        <h3>Ali Sebai</h3>
                        <h4>Plombier chauffagiste</h4>
                        <p>Enfin un site qui comprend les besoins des artisans ! Interface claire, clients réels, et un bon suivi. Je recommande les yeux fermés.</p>
                    </div>
                    <!-- Client 1 -->
                    <div class="slider-item">
                        <h3>Rania Djalal</h3>
                        <h4>Cliente - Peinture et déco</h4>
                        <p>J’ai trouvé un artisan très compétent en quelques clics. Travail propre, rapide, et exactement comme je l’espérais. Merci pour la mise en relation !</p>
                    </div>
                    <!-- Client 2 -->
                    <div class="slider-item">
                        <h3>Hakim Boulahbal</h3>
                        <h4>Client - Rénovation salle de bain</h4>
                        <p>Le site m’a permis de comparer plusieurs artisans et choisir celui qui me convenait le mieux. Le résultat est impeccable !</p>
                    </div>
                    <!-- Client 3 -->
                    <div class="slider-item">
                        <h3>Sabrina Mecheri</h3>
                        <h4>Cliente - Couture sur mesure</h4>
                        <p>Service pratique et sécurisé. J’ai été mise en contact avec une couturière exceptionnelle. Je suis très satisfaite du rendu final.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos Collaborateurs</p>
            <h2>Artisans & Sociétés d'artisans</h2>
        </div>
        <div class="row">
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=artisan_finder', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer les artisans
            $stmtArtisans = $pdo->query("SELECT * FROM artisans");
            while ($a = $stmtArtisans->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/<?= htmlspecialchars($a['photo']) ?>" alt="Artisan" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="blog-title">
                            <h3><?= htmlspecialchars($a['nom']) ?></h3>
                            <a class="btn" href="https://wa.me/<?= htmlspecialchars($a['whatsapp']) ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <div class="blog-meta">
                            <p><strong>Métier:</strong> <?= htmlspecialchars($a['profession']) ?></p>
                            <p><strong>Ville:</strong> <?= htmlspecialchars($a['ville']) ?></p>
                        </div>
                        <div class="blog-text">
                            <p><strong>Adresse:</strong> <?= htmlspecialchars($a['adresse']) ?></p>
                            <p><strong>Téléphone:</strong> <?= htmlspecialchars($a['telephone']) ?></p>
                            <div>
                                <?php if (!empty($a['facebook'])): ?>
                                    <a href="<?= htmlspecialchars($a['facebook']) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($a['instagram'])): ?>
                                    <a href="<?= htmlspecialchars($a['instagram']) ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
            // Récupérer les sociétés d'artisans
            $stmtSoc = $pdo->query("SELECT * FROM societe_artisan");
            while ($s = $stmtSoc->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/<?= htmlspecialchars($s['photo']) ?>" alt="Société" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="blog-title">
                            <h3><?= htmlspecialchars($s['nom_societe']) ?></h3>
                            <a class="btn" href="#"><i class="fas fa-building"></i></a>
                        </div>
                        <div class="blog-meta">
                            <p><strong>Ville:</strong> <?= htmlspecialchars($s['ville']) ?></p>
                        </div>
                        <div class="blog-text">
                            <p><strong>Adresse:</strong> <?= htmlspecialchars($s['adresse']) ?></p>
                            <p><strong>Téléphone:</strong> <?= htmlspecialchars($s['telephone']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

            <!-- Blog End -->


            <!-- Footer Start -->
            
            @include('layout.footer')
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/slick/slick.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
