<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Oficiálna stránka pohrebnej služby Molnár - Veľké Úľany/Sládkovičovo. Poskytujeme rôzne pohrebné služby a predaj kvetov v okolí Veľkých Úľan a Sládkovičova. Dokážete nás zastihnúť na nižšie uvedených číslach.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontakt</title>

    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleKONTAKT.css">
    <link rel="shortcut icon" href="img/favicon.png"><!-- FAVICON LOGO by iconixar-->

    <!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>
<header>  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " >
            <div class="container-fluid ">
                <a class="navbar-brand hNadpis" href="#" id="scrollToTopBtn"><i class="fa fa-cross"></i> Pohrebné služby Molnár Veľké Úľany - Sládkovičovo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="index">O nás</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="nase_sluzby">Naše služby</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="galeria">Galéria</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="kontakt">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="nahlad">
            <div class="hodiny">
                <table class="table table-borderless text-start">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center">Otváracie hodiny</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'hodiny.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
</header>
<main>

    <div class="pre-footer">
        <div class="container mb-5 containerCarousel">
            <div class="row justify-content-around align-items-center">
                <div class="col-6 text-center my-4 "> 
                    <h1 class="mb-2 nazvyMiest border-bottom border-dark">Veľké Úľany</h1>
                    <iframe class="iframeShadow1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.228386858017!2d17.57121251561475!3d48.163679379225435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b7ca9d2e25401%3A0xa41b248a31c5f50e!2zSGxhdm7DoSAxNTE0LCA5MjUgMjIgVmXEvmvDqSDDmsS-YW55!5e0!3m2!1ssk!2ssk!4v1618918370403!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-6 text-center my-4">
                    <h1 class="mb-2 nazvyMiest border-bottom border-dark">Sládkovičovo</h1>
                    <iframe class="iframeShadow2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1329.5094452605947!2d17.636104671981826!3d48.20625206595238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b645ee9ff0807%3A0x75df08522323f459!2zQ2ludG9yw61u!5e0!3m2!1ssk!2ssk!4v1618945559026!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

</main>

<footer>
    <div class="kontaktInfo">
        <div class="container">
            <div class="row justify-content-evenly">

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 h-auto Cisla ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-bottom border-dark " style="background-color:inherit;"><a class="mestoFont aremove" href="https://www.google.com/maps?ll=48.163679,17.573401&z=16&t=m&hl=sk&gl=SK&mapclient=embed&q=Hlavn%C3%A1+1514+925+22+Ve%C4%BEk%C3%A9+%C3%9A%C4%BEany"><i class="fas fa-map-marker-alt"></i>  Veľké Úľany, Hlavná 1514/54</i></a></li>
                        <li class="list-group-item border-bottom border-dark " style="background-color:inherit;"><a class="mestoFont aremove" href="https://www.google.com/maps?ll=48.206435,17.63673&z=17&t=m&hl=sk&gl=SK&mapclient=embed&cid=8493516571113944153"><i class="fas fa-map-marker-alt"></i>  Sládkovičovo, cintorín</i></a></li>
                        <li class="list-group-item " style="background-color:inherit;"><a href="mailto:orchidea-vu@azet.sk"><i class="fas fa-envelope">  orchidea-vu@azet.sk</i></a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 h-auto Cisla ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-bottom border-dark" style="background-color:inherit;"><a href="tel:+421 905 639 026"><i class="fas fa-phone">  0905 639 026</i></a></li>
                        <li class="list-group-item border-bottom border-dark" style="background-color:inherit;"><a href="tel:+421 907 897 081"><i class="fas fa-phone">  0907 897 081</i></a></li>
                        <li class="list-group-item" style="background-color:inherit;"><a href="tel:+421 907 892 847"><i class="fas fa-phone">  0907 892 847</i></a></li>
                    </ul>
                </div>

            
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 h-auto Cisla ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-bottom border-dark" style="background-color:inherit;">IČO: 34649646</li>
                        <li class="list-group-item border-bottom border-dark" style="background-color:inherit;">DIČ: 1020273529</li>
                        <li class="list-group-item " style="background-color:inherit;">IČ DPH: SK1020273529</li>
                    </ul>
                </div>

            </div>
        </div>
            
       
    </div>
</footer>

<script src="https://kit.fontawesome.com/8f2e62f169.js" crossorigin="anonymous"></script><!-- FA -->
<script src="js/jquery-3.6.0.min.js"></script><!-- BTS 5 ANI NEPOTREBUJE JQUERY, TAKZE ASI ZBYTOCNE -->
<script src="js/bootstrap.js"></script>
<script src="js/mojscript.js"></script>
</body>
</html>