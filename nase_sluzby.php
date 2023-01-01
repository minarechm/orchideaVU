<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Oficiálna stránka pohrebnej služby Molnár - Veľké Úľany/Sládkovičovo. Poskytujeme rôzne pohrebné služby a predaj kvetov v okolí Veľkých Úľan a Sládkovičova. Dokážete nás zastihnúť na nižšie uvedených číslach.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Naše služby</title>

    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleSLUZBY.css">
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
                            <a class="nav-link active" href="nase_sluzby">Naše služby</a>
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

</header>

<main>
<div class="podObrazkami">
    <div class="container">
        <h1 class="border-bottom border-dark pb-3">Pri prevádzke našej pohrebnej služby vieme poskytnúť nasledovné služby</h1>
    </div>
    <div class="row justify-content-evenly mt-5 "> <!-- ALIGN ITEMS CENTER REMOVED(na oboch row), POTOM SA HEIGHT USTANOVIL  -->
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien1"> 
        <h1><i class="fas fa-shield-alt podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Zabezpečenie a organizácia pohrebného obradu</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien5"> 
        <h1><i class="fas fa-sticky-note podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Vybavovanie príslušných dokladov na úradoch</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien2"> 
        <h1><i class="fas fa-car-side podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Prevoz, úprava a obliekanie zosnulého</p>
        </div>
    </div>

    <div class="row justify-content-evenly pb-5">
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien3"> 
        <h1><i class="fas fa-hand-holding-heart podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Posledná rozlúčka a pochovanie</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien6"> 
        <h1><i class="fas fa-hammer podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Výkopové práce</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek tien4"> 
        <h1><i class="fas fa-store podObrazkamiObrazok"></i></h1>
        <p class="podObrazkomText">Predaj rakiev a smútočných potrieb</p>
        </div>
    </div>
</div>


<div class="podObrazkami2">
    <div class="container">
        <h1 class="border-bottom border-dark ">Kvetinárstvo Orchidea poskytuje nasledovné služby</h1>
    </div>
    <div class="row justify-content-evenly mt-5 pb-5"> <!-- ALIGN ITEMS CENTER REMOVED(na oboch row), POTOM SA HEIGHT USTANOVIL  -->
        <div class="col-3 text-center my-3 podObrazkamiOdsek2 tien1"> 
        <h1><i class="fas fa-fan podObrazkamiObrazok2"></i></h1>
        <p class="podObrazkomText">Živé a umelé vence / kytice</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek2 tien5"> 
        <h1><i class="fab fa-envira podObrazkamiObrazok2"></i></h1>
        <p class="podObrazkomText">Črepníkové / rezané kvety</p>
        </div>
        <div class="col-3 text-center my-3 podObrazkamiOdsek2 tien2"> 
        <h1><i class="fas fa-gifts podObrazkamiObrazok2"></i></h1>
        <p class="podObrazkomText">Kahance, sviečky, darčekový tovar</p>
        </div>
    </div>

</div>

</main>

<script src="https://kit.fontawesome.com/8f2e62f169.js" crossorigin="anonymous"></script><!-- FA -->
<script src="js/jquery-3.6.0.min.js"></script><!-- BTS 5 ANI NEPOTREBUJE JQUERY, TAKZE ASI ZBYTOCNE -->
<script src="js/bootstrap.js"></script>
<script src="js/mojscript.js"></script>
</body>
</html>