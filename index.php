<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Oficiálna stránka pohrebnej služby Molnár - Veľké Úľany/Sládkovičovo. Poskytujeme rôzne pohrebné služby a predaj kvetov v okolí Veľkých Úľan a Sládkovičova. Dokážete nás zastihnúť na nižšie uvedených číslach.">
    <meta name="keywords" content="Pohrebné služby, Pohrebníctvo Sládkovičovo, Pohrebníctvo, Molnár, Ernest Molnár, Veľké Úľany, orchideavu, Orchidea Veľke Úlany, Veľké Úľany Pohrebníctvo, Pohrebné služby ernest molnár">
    <meta name="author" content="Martin Minárech">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>O nás</title>

    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link active" aria-current="page" href="index">O nás</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="nase_sluzby">Naše služby</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="galeria">Galéria</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="kontakt">Kontakt</a>
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

        <div class="nahladPod">
            <div class="container mb-5">
                <div class="row justify-content-around align-items-center">

                    <div class="col-3 text-start my-4"> 
                        <p>
                            Pohrebníctvu  sa naša spoločnosť začala venovať v roku 2008, v súčasnosti ju tvorí  8 pracovníkov. Ako rodinná firma s dlhoročnými skúsenosťami v tejto oblasti sa snažíme  zabezpečovať  kvalitné služby za prijateľné ceny.   
                        </p>
                    </div>

                    <div class="col-4 text-center my-4 border-start border-end border-dark">
                        <div class="icon tombstone">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Solid" viewBox="0 0 512 512">
                                <path d="M264,176V152H248v24a8,8,0,0,1-8,8H224v16h16a8,8,0,0,1,8,8v48h16V208a8,8,0,0,1,8-8h16V184H272A8,8,0,0,1,264,176Z"/>
                               <path d="M128,168c0-.033,0-.066,0-.1s0-.064,0-.1A120.136,120.136,0,0,1,248,48h16a119.34,119.34,0,0,1,70.491,22.951,7.824,7.824,0,0,1,1.34.981A119.894,119.894,0,0,1,384,168V380.546q7.8.785,16,2.141V168c0-74.991-61.01-136-136-136H248c-74.99,0-136,61.009-136,136V368.749q7.649-.489,16-.667Z"/>
                                <path d="M480,428.573c-58.553-33.833-112.648-35.946-148.031-31.632a222.953,222.953,0,0,0-46.515,10.744C308.134,416.841,327.921,424,344,424a8,8,0,0,1,0,16c-21.933,0-47.123-10.321-76.291-22.272C229.124,401.918,185.391,384,136,384c-39.6,0-66.677,6.113-82.416,11.242A117.924,117.924,0,0,0,32,404.421V480H480Z"/>
                                <path d="M325.47,296.411a8,8,0,0,1,10.12,5.059l7.063,21.193L368,337.871V168a103.757,103.757,0,0,0-34.179-77.012l-6.393,15.983a8,8,0,0,1-4.9,4.618l-24,8a8,8,0,1,1-5.06-15.178l20.48-6.827,6.7-16.756A103.379,103.379,0,0,0,264,64H248A104.116,104.116,0,0,0,144.019,166.507l30.279,75.7,29.28,14.64a8,8,0,1,1-7.156,14.31l-4.223-2.111-6.36,15.9,18.6,12.4a8,8,0,1,1-8.876,13.312l-24-16a8,8,0,0,1-2.99-9.627l9.266-23.165-13.416-6.709a8,8,0,0,1-3.85-4.184L144,209.541V368.156c45.044,1.66,85.972,16.959,120.177,30.846,8.994-4.184,32.636-13.892,65.854-17.943A243.2,243.2,0,0,1,368,379.45V356.53l-30.76-18.456-11.583,11.583a8,8,0,0,1-8.187,1.932l-24-8a8,8,0,1,1,5.06-15.178l19.309,6.436,9.008-9.008L320.41,306.53A8,8,0,0,1,325.47,296.411ZM304,208a8,8,0,0,1-8,8H280v48a8,8,0,0,1-8,8H240a8,8,0,0,1-8-8V216H216a8,8,0,0,1-8-8V176a8,8,0,0,1,8-8h16V144a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8v24h16a8,8,0,0,1,8,8Z"/>
                             </svg>
                        </div>

                        <p>
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p>
                                        <em>"Právo na ľudskú dôstojnosť musí byť zachované aj po smrti človeka."</em>
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Ernest Molnár
                                </figcaption>
                            </figure>
                        </p>
                    </div>

                    <div class="col-3 text-end my-4 "> 
                        <p>
                        Okrem komplexných pohrebných služieb  prevádzkujeme aj kvetinárstvo <span class="orchid">Orchidea</span>, ktoré okrem sezónneho tovaru  dopĺňa svojim sortimentom poskytované pohrebné služby. 
                        Od októbra 2020 sme sa stali prevádzkovateľom cintorína  v  Sládkovičove.   
                        </p>
                    </div>
                </div>
            </div>
        </div>

</header>
<main>

<div class="container containerCarousel mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="border-radius:10px;">
        <div class="carousel-item active" >
        <img src="img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

</main>
    
<footer>
    <div class="poslednyDiv">
        <div class="kontaktneUdaje">
               <h1>Zaujali sme Vás?</h1>
               <h2>Jednoducho nám Zavolajte alebo napíšte<h2> 
                <ul class="kontaktneUdajeUL">
                    <li><a href="tel:+421 905 639 026"><i class="fas fa-phone">  0905 639 026</i></a></li>
                    <li><a href="tel:+421 907 897 081"><i class="fas fa-phone">  0907 897 081</i></a></li>
                    <li><a href="tel:+421 907 892 847"><i class="fas fa-phone">  0907 892 847</i></a></li>
                    <li><a href="mailto:orchidea-vu@azet.sk"><i class="fas fa-envelope">  orchidea-vu@azet.sk</i></a></li>
                </ul>
        </div>
    </div>

    <div class="copyright">
        <div class="container-fluid">
        Stránku vypracoval <a href=mailto:minarechma@gmail.com>minarechma@gmail.com</a>       
        </div>
    </div>
</footer>


<script src="https://kit.fontawesome.com/8f2e62f169.js" crossorigin="anonymous"></script><!-- FA -->
<script src="js/jquery-3.6.0.min.js"></script><!-- BTS 5 ANI NEPOTREBUJE JQUERY, TAKZE ASI ZBYTOCNE -->
<script src="js/bootstrap.js"></script>
<script src="js/mojscript.js"></script>
</body>
</html>