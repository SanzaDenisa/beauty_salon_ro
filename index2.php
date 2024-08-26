<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>


<!-- HTML code for the appointment page goes here -->




<!DOCTYPE html>
<html lang="en">

<head>

  <title>Men Salon Management System || Home Page</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Style -->
  <link href="css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
</head>

<body>
  <?php include_once('includes/header.php'); ?>

  <!-- home page  -->
  <div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1 class="hero-title">Beauty Salon <i class="fa fa-scissors"></i></h1>
          <p class="hero-text"><strong>YOUR TYPES <i class="fa fa-users"></i> , YOUR STYLE <i
                class="fa fa-angellist"></i> , YOUR COLOR <i class="fa fa-asterisk"></i> .</strong> </p>
                <p class="hero-text2"><strong>ACUM SI IN ORADEA</strong> </p>

          <a href="appointment.php" class="btn btn-default">Programare Online Aici <i class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- home page end -->

  <!-- about us section-->
  <div class="space-medium bg-default">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt=""
            class="img-responsive"></div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="well-block">
            <?php
            $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

              ?>
              <h1>
                <?php echo $row['PageTitle']; ?>
              </h1>
              <h5 class="small-title ">cea mai buna experiență</h5>
              <p>
              La Beauty Salon, frumusețea ta este prioritatea noastră. Suntem un salon de înfrumusețare modern și elegant, dedicat artei tunsului, coafatului și machiajului. Cu o echipă de profesioniști pasionați și talentați, ne mândrim să oferim servicii personalizate care să îți pună în valoare stilul unic și frumusețea naturală.
              <br>
              Folosim produse de înaltă calitate și tehnici inovatoare pentru a ne asigura că fiecare vizită la salonul nostru este o experiență plăcută și relaxantă. Indiferent dacă îți dorești o tunsoare proaspătă, un stil de coafură sofisticat pentru un eveniment special sau un machiaj impecabil, suntem aici să transformăm viziunea ta în realitate.
              <br>Ne dedicăm în mod constant să ne îmbunătățim cunoștințele și abilitățile, rămânând la curent cu ultimele tendințe în modă și frumusețe, pentru ca tu să beneficiezi de cele mai bune servicii disponibile. 
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about us section end-->

  <h2 class="mission_vision-title">Misson & Vision</h2>

  <!-- mission vision section -->
  <section class="mission-vision">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="mission">
            <h3>Our Mission <i class="fa fa-user-secret"></i></h3>
            <p>În salonul, misiunea noastră este să oferim servicii de salon de înaltă calitate clienților noștri, utilizând produse de calitate superioară, acordând atenție personalizată și creând o atmosferă relaxantă. 
              Ne străduim să depășim așteptările clienților noștri, menținându-ne la curent cu cele mai recente tendințe și tehnici, în timp ce adoptăm o abordare ecologică și sustenabilă în afacerea noastră.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <h3>Our Vision <i class="fa fa-opencart"></i></h3>
            <p>Viziunea noastră este să devenim un beauty salon de top, prin sprijinirea proprietarilor de saloane în eficientizarea operațiunilor, îmbunătățirea experiențelor clienților și creșterea profitabilității lor. Ne propunem să realizăm această viziune prin valorificarea tehnologiei de ultimă generație, promovarea unei culturi a inovației și colaborării și oferirea unui serviciu pentru clienți de neegalat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- mission vision end -->
  

  <!-- what we do section -->
  <div class="what-we-do">
    <h2>Serviciile Noastre</h2>
    <ul>
      <li> <i class="fa fa-check-circle-o"></i> <b>Coafor:</b> Tuns, spalat si aranjat de zi, vopsit, decolorat, aranjat de ocazie etc.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Cosmetică </b> Pensat vopsit sprâncene; Tratamente faciale; Machiaj </li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Manichiură-Pedichiură:</b> Manichiură clasică; Manichiură cu gel lac; Construcție cu gel; Întreținere cu gel; Pedichiură simplă; Pedichiură cu gel lac.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Servicii pentru bărbați:</b>Tuns barbati cu sau fara barba, Pensat barbati</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Epilare:</b> Epilare cu ceară sau laser</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Altele </b>Extensii de gene, laminare sprancene si gene etc.</li>
    </ul>
  </div>
  <!-- what we do section end -->


  <!-- why choose us section -->
  <section id="why-choose">
    <div class="container">
      <h2 class="section-title">De ce să ne alegi pe noi?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-scissors"></i>
            <h3>Stiliști cu Experiență</h3>
            <p>Our stylists have years of experience and are always up-to-date with the latest styles and techniques.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-trophy"></i>
            <h3>Servicii de Calitate</h3>
            <p>We pride ourselves on providing top-notch service and ensuring every customer leaves our salon looking
              and feeling great.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-money"></i>
            <h3>Prețuri Accesibile</h3>
            <p>Our prices are competitive and we offer a variety of packages and deals to make sure you get the most for
              your money.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose us section end-->


  <!-- our services section -->
  <section class="services">
    <div class="container">
      <h2>Serviciile Noastre</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="service">
            <img src="images/Coafor.png" alt="Haircut">
            <h3>Coafor <i class="fa fa-scissors"></i> </h3>
            <p>Our stylists and barbers are experts in men's haircuts, from classic cuts to modern styles. We take the
              time to understand your individual style.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/Cosmetica.jpg" alt="Color">
            <h3>Cosmetică <i class="fa fa-adjust"></i> </h3>
            <p> Whether you want to cover up gray hair or try out a new look, our stylists can help you achieve the
              perfect hair color to suit your style and personality.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/Manichiura.jpg" alt="Styling">
            <h3>Manichiură <i class="fa fa-hand-peace-o"></i></h3>
            <p>From special occasions to everyday looks, our stylists can help you achieve the perfect style to suit any
              occasion. We use the latest techniques.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/malehair.jpg" alt="Styling">
            <h3>Frizerie <i class="fa fa-scissors"></i></h3>
            <p>From special occasions to everyday looks, our stylists can help you achieve the perfect style to suit any
              occasion. We use the latest techniques.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/epilare.jpg" alt="Styling">
            <h3>Epilare <i class="fa fa-eraser"></i></h3>
            <p>From special occasions to everyday looks, our stylists can help you achieve the perfect style to suit any
              occasion. We use the latest techniques.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/Gene.jpg" alt="Styling">
            <h3>Altele <i class="fa fa-eye"></i></h3>
            <p>From special occasions to everyday looks, our stylists can help you achieve the perfect style to suit any
              occasion. We use the latest techniques.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our services section end-->


  <!-- photo gallery section -->
  <section class="gallery">
    <h2>Photo Gallery</h2>
    <div class="gallery-container">
      <img src="images/port-1.jpg" alt="Photo 1">
      <img src="images/port-2.jpg" alt="Photo 2">
      <img src="images/portfolio-3.jpg" alt="Photo 3">
      <img src="images/port-3.jpg" alt="Photo 4">
      <img src="images/port-4.jpg" alt="Photo 5">
      <img src="images/port-5.jpg" alt="Photo 6">
      <img src="images/portfolio-2.jpg" alt="Photo 7">
      <img src="images/port-6.jpg" alt="Photo 8">
    </div>
  </section>
  <!-- photo gallery section end here-->


  <!-- book appointment section -->
  <div class="space-small bg-primary">
    <!-- call to action -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
          <h1 class="cta-title">Programare online</h1>
        </div>
        <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
          <a href="appointment.php" class="btn btn-white btn-lg mt20">Programeaza aici <i
              class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- book appointment section end -->


  <!-- /.footer-->
  <?php include_once('includes/footer.php'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menumaker.js"></script>
  <!-- sticky header -->
  <script src="js/jquery.sticky.js"></script>
  <script src="js/sticky-header.js"></script>


  <!-- javascript for mission vision -->
  <!-- <script>
    const elts = {
      text1: document.getElementById("text1"),
      text2: document.getElementById("text2")
    };

    const texts = [
      "OUR",
      "SALON",
      "MISSION",
      "AND",
      "VISION",
      ":)",

    ];

    const morphTime = 1;
    const cooldownTime = 0.25;

    let textIndex = texts.length - 1;
    let time = new Date();
    let morph = 0;
    let cooldown = cooldownTime;

    elts.text1.textContent = texts[textIndex % texts.length];
    elts.text2.textContent = texts[(textIndex + 1) % texts.length];

    function doMorph() {
      morph -= cooldown;
      cooldown = 0;

      let fraction = morph / morphTime;

      if (fraction > 1) {
        cooldown = cooldownTime;
        fraction = 1;
      }

      setMorph(fraction);
    }

    function setMorph(fraction) {
      elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
      elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

      fraction = 1 - fraction;
      elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
      elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

      elts.text1.textContent = texts[textIndex % texts.length];
      elts.text2.textContent = texts[(textIndex + 1) % texts.length];
    }

    function doCooldown() {
      morph = 0;

      elts.text2.style.filter = "";
      elts.text2.style.opacity = "100%";

      elts.text1.style.filter = "";
      elts.text1.style.opacity = "0%";
    }

    function animate() {
      requestAnimationFrame(animate);

      let newTime = new Date();
      let shouldIncrementIndex = cooldown > 0;
      let dt = (newTime - time) / 1000;
      time = newTime;

      cooldown -= dt;

      if (cooldown <= 0) {
        if (shouldIncrementIndex) {
          textIndex++;
        }

        doMorph();
      } else {
        doCooldown();
      }
    }

    animate();
  </script> -->
  <!-- javascript for mission vision end -->

</body>

</html>