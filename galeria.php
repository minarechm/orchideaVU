<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Oficiálna stránka pohrebnej služby Molnár - Veľké Úľany/Sládkovičovo. Poskytujeme rôzne pohrebné služby a predaj kvetov v okolí Veľkých Úľan a Sládkovičova. Dokážete nás zastihnúť na nižšie uvedených číslach.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galéria</title>

    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleGALERIA.css">
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
                            <a class="nav-link active" href="galeria">Galéria</a>
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
</header>

<body>
    <div class="galeriaFotky">
        <div class="container clearfix">     
            <div class="row justify-content-center">

                <div class="imgWrap">
                <a href="img/1.jpg">
                    <img src="img/1.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
                
                <div class="imgWrap">
                <a href="img/2.jpg">
                    <img src="img/2.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
                  
                <div class="imgWrap">
                <a href="img/3.jpg">
                    <img src="img/3.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
                
                <div class="imgWrap">
                <a href="img/4.jpg">
                    <img src="img/4.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
               
                <div class="imgWrap">
                <a href="img/5.jpg">
                    <img src="img/5.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
               
                <div class="imgWrap">
                <a href="img/6.jpg">
                    <img src="img/6.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/7.jpg">
                     <img src="img/7.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/8.jpg">
                    <img src="img/8.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/9.jpg">
                    <img src="img/9.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/10.jpg">
                    <img src="img/10.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/11.jpg">
                    <img src="img/11.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/12.jpg">
                    <img src="img/12.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/13.jpg">
                    <img src="img/13.jpg" class="galeriaObrazok">
                    </img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/14.jpg">
                    <img src="img/14.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/15.jpg">
                    <img src="img/15.jpg" class="galeriaObrazok"></img>
                </a>
                </div>

                <div class="imgWrap">
                <a href="img/16.jpg">
                    <img src="img/16.jpg" class="galeriaObrazok"></img>
                </a>
                </div>
            </div>

        </div>
    </div>
</body>


<script src="https://kit.fontawesome.com/8f2e62f169.js" crossorigin="anonymous"></script><!-- FA -->
<script src="js/jquery-3.6.0.min.js"></script><!-- BTS 5 ANI NEPOTREBUJE JQUERY, TAKZE ASI ZBYTOCNE -->
<script src="js/bootstrap.js"></script>
<script src="js/mojscript.js"></script>
</body>
</html>