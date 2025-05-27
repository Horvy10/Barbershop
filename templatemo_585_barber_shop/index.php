<?php
require_once 'config.php';
require_once 'classes/Service.php';

$service = new Service($mysqli);
$services = $service->getAll();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Barbershop30</title>

        <!-- CSS Súbory -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-barber-shop.css" rel="stylesheet">

    </head>
    
    <body>
    <?php include_once 'parts/header.php'; ?>

                    <section class="about-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 mx-auto">
                                    <h2 class="mb-4">Najlepší barbershop v Nitre</h2>

                                    <div class="border-bottom pb-3 mb-5">
                                        <p>Barbershop náš veľký sen sa stal realitou, a tak Vám s radosťou predstavujeme nový Barbershop30, ktorý je elegantne zariadený v moderno-industriálnom štýle. Nachádza sa priamo v centre mesta Nitry. </p>
                                    </div>
                                </div>

                                <section id="services" class="section-padding">
                                </section>


                                    <h6 class="mb-5">Naši barberi</h6>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-male-hairdresser-with-scissors.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">Jojo</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-facebook">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-instagram">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-whatsapp">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-mid-adult-bearded-male-barber-with-folded-arms.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">Kevin</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-facebook">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-instagram">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="featured-section section-padding">
                        <div class="section-overlay"></div>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <h2 class="mb-3">Získaj 20% zľavu</h2>

                                    <p>získaj zľavu na každý druhý strih</p></p>

                                    <strong>Promo Kód: BRB30 </strong>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="services-section section-padding" id="section_3">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">Služby</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/woman-cutting-hair-man-salon.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Pánsky strih</h4>

                                            <strong class="services-thumb-price">20.00€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-their-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Umývanie vlasov</h4>

                                            <strong class="services-thumb-price">25.00€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Holenie</h4>

                                            <strong class="services-thumb-price">30.00€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <img src="images/services/boy-getting-haircut-salon-front-view.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Deti</h4>

                                            <strong class="services-thumb-price">15.00€</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="#" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Rezervuj si termín</h2>

                                        <p>Vyplň tento formulár na rezervovanie termínu</p>
                                    </div>

                                    <div class="booking-form-body">
                                        <div class="row">

                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Meno a priezvisko" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="tel" class="form-control" name="bb-phone" placeholder="Tel.číslo 0944 020 002" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                                            </div>
                                        
                                            <div class="col-lg-6 col-12">
                                                <input class="form-control" type="time" name="bb-time" value="18:30" />
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                                    <option selected="">Naša pobočka</option>
                                                    <option value="Grünberger">Nitra, Mostná 30</option>
                                                </select>

                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Dátum" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="number" name="bb-number" id="bb-number" class="form-control" placeholder="Počet ľudí" required>
                                            </div>
                                        </div>

                                        <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Poznámka"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Rezervovať</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </section>

                <section class="price-list-section section-padding" id="section_4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12">
        <div class="price-list-thumb-wrap">
          <div class="mb-4">
            <h2 class="mb-2">Cenník</h2>
            <strong>Začína na 10€</strong>
          </div>

          <?php if ($services && $services->num_rows > 0): ?>
            <?php while ($row = $services->fetch_assoc()): ?>
              <div class="price-list-thumb">
                <h6 class="d-flex">
                  <?= htmlspecialchars($row['name']) ?>
                  <span class="price-list-thumb-divider"></span>
                  <strong><?= number_format($row['price'], 2) ?>€</strong>
                </h6>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <p>Žiadne služby nie sú k dispozícii.</p>
          <?php endif; ?>

        </div>
      </div>
      <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
        <img src="images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
      </div>
    </div>
  </div>
</section>




                <section class="contact-section" id="section_5">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">   

                                <div class="col-lg-8 col-12 mx-auto">
                                <?php
                                $hour = date('H');

                                if ($hour < 12) {
                                    echo "<h3>Dobré ráno prajeme</h3>";
                              } elseif ($hour < 18) {
                                    echo "<h3>Dobrý deň prajeme</h3>";
                              } else {
                                    echo "<h3>Dobrý večer prajeme</h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Kontakt</strong></h5>

                                    <p class="text-white d-flex mb-1">
                                        <a href="tel: 120-240-3600" class="site-footer-link">
                                            (+421) 
                                            944 240 002
                                        </a>
                                    </p>

                                    <p class="text-white d-flex">
                                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                            barbershop30@gmail.com
                                        </a>
                                    </p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-youtube">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                    <div class="contact-block">
                                        <h6 class="mb-0">
                                            <i class="custom-icon bi-shop me-3"></i>

                                            <strong>Otvorené Denne</strong>

                                            <span class="ms-auto">10:00 - 20:00</span>
                                        </h6>
                                    </div>
                                </div>

                            <div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.513857962374!2d18.08412331564777!3d48.31234597924621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3f9e2f1b2f2b%3A0x123456789abcdef!2sBarbershop30%2C%20Mostn%C3%A1%2030%2C%20949%2001%20Nitra%2C%20Slovensko!5e0!3m2!1ssk!2ssk!4v1680000000000!5m2!1ssk!2ssk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>


                            </div>
                        </div>
                    </div>
                </section>

                <?php include_once 'parts/footer.php'; ?>
    </body>
</html>