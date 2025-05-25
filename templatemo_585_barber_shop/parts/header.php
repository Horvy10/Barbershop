<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php session_start(); ?>
            <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/templatemo-barber-logo.png" class="logo-image img-fluid" align="">
                    </a>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Domov</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">O nás</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Služby</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Cenník</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Kontakt</a>
                        </li>
                       <?php if (isset($_SESSION['user_id'])): ?>
    <li class="nav-item">
        <a class="nav-link" href="../admin/services.php">Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../logout.php">Odhlásiť sa</a>
    </li>
<?php else: ?>
    <li class="nav-item">
        <a class="nav-link" href="../templatemo_585_barber_shop/register.php">Registrácia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../templatemo_585_barber_shop/login.php">Prihlásenie</a>
    </li>
<?php endif; ?>
                    </ul>
                </div>
            </nav>
            
            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12">
                                    <h1 class="text-white mb-lg-3 mb-4"><strong>BarberShop30</strong></h1>
                                    <p class="text-black">Získaj najviac profesionálny účes v Nitre</p>
                                    <br>
                                    <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">O nás</a>

                                    <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Čo vlastne robíme</a>
                                </div>
                            </div>
                        </div>

                        <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                            <img src="images/vintage-chair-barbershop.jpg" class="custom-block-image img-fluid" alt="">

                            <h4><strong class="text-white">Rezervuj si termín práve teraz!</strong></h4>

                            <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Rezervovať hned´</a>
                        </div>
                </section>

</body>
</html>