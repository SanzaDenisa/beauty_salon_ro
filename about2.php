<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">About us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">About us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/work-4.jpg" alt=""
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
                            <h5 class="small-title ">Best experience</h5>
                            <p>
                            La Beauty Salon, frumusețea ta este prioritatea noastră. Fondat în 2010, salonul nostru a pornit cu un vis simplu: de a redefini standardele de îngrijire personală și de a aduce în prim-plan autenticitatea și eleganța fiecărui client. Cu o atmosferă modernă și elegantă, ne-am transformat rapid într-o destinație de top pentru cei care caută nu doar servicii de înfrumusețare, ci o adevărată experiență de răsfăț.

<br>De la început, ne-am concentrat pe crearea unei echipe de profesioniști pasionați și talentați, fiecare membru fiind dedicat artei tunsului, coafatului și machiajului. Suntem mândri de abilitățile noastre și de capacitatea de a oferi servicii personalizate care să pună în valoare stilul unic și frumusețea naturală a fiecărui client.

<br>În primii ani, am investit în formarea continuă a echipei noastre, asigurându-ne că rămânem la curent cu cele mai recente tendințe și tehnici din industria frumuseții. Această dedicare ne-a permis să creștem și să ne extindem portofoliul de servicii, devenind un nume respectat în comunitate.

<br>Folosim produse de înaltă calitate și tehnici inovatoare pentru a ne asigura că fiecare vizită la salonul nostru este o experiență plăcută și relaxantă. Fie că îți dorești o tunsoare proaspătă, un stil de coafură sofisticat pentru un eveniment special sau un machiaj impecabil, suntem aici să transformăm viziunea ta în realitate.

<br>Cu o atenție constantă la detalii și o dorință de a oferi doar cele mai bune servicii, Beauty Salon a evoluat de la un simplu salon la un adevărat sanctuar al frumuseții. Indiferent de ocazie, suntem aici pentru a te ajuta să arăți și să te simți minunat, oferindu-ți o experiență de neuitat care să te facă să revii de fiecare dată cu plăcere.


                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('includes/footer.php'); ?>