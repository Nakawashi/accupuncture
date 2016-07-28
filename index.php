<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>Accueil</title>

  <meta name="description" content="">
  <meta name="author" content="lucie genevey">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/app.css">
    
    <!-- Bootstrap Flat Ui -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/accueil.css">
	

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
<body>

    <header class="header">
        <div class="container">
        
            <div class="row">
                <div class="col-sm-1 left-picture header-picture">
                    <img alt="symbole chinois" src="images/img-header/img-gauche.png">
                </div>

                <div class="col-sm-8 div-header-title">
                    <h1 class="header-title1">DAVID RIEMARZIK</h1>
                    <hr class="hr-header-subtitle">
                    <h2 class="header-title2">MEDECINE TRADITIONNELLE CHINOISE</h2>
                </div>

                <div class="col-sm-1 right-picture header-picture">
                    <img alt="symbole chinois" src="images/img-header/img-droite.png">
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-12 navigation">
                    <nav class="menu">
                        <ul class="menu-list">
                            <li class="menu-inline"><a class="btn" href="index.php">Accueil</a></li>
                            <li class="menu-inline dropdown"><a class="dropdown-toggle btn" data-toggle="dropdown">Traitements <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="traitements/acupuncture.php">Acupuncture</a></li>
                                    <li><a href="traitements/moxibustion.php">Moxibustion</a></li>
                                    <li><a href="traitements/tuina.php">Tui Na (massages chinois)</a></li>
                                    <li><a href="traitements/ventouses.php">Ventouses</a></li>
                                    <li><a href="traitements/phytotherapie.php">Phytothérapie</a></li>
                                    <li><a href="traitements/dietetique.php">Conseil Diététique</a></li>
                                </ul>
                            </li>
                            <li class="menu-inline"><a class="btn" href="praticien.php">Praticien</a></li>
                            <li class="menu-inline"><a class="btn" href="maladies-traitees.php">Maladies Traitées</a></li>
                            <li class="menu-inline"><a class="btn" href="tarifs-et-remboursement.php">Tarifs et Remboursements</a></li>
                            <li class="menu-inline"><a class="btn" href="contact.php">Contact</a></li>
                            <li class="menu-inline"><a class="btn" href="liens.php">Liens</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="img-position-top" src="images/img-accueil/meridians-dos-bleu.jpg">
            </div>
            <div class="col-md-7">
                <div>
                    <h2 class="h2-position">Médecine traditionnelle chinoise</h2>
                    <p class="p-txt-accueil">La médecine traditionnelle chinoise (MTC) conçoit le corps comme un système cohérent dans lequel toutes les parties du corps, les organes et les systèmes organiques sont reliés entre eux par les méridiens, les voies par lesquelles l'énergie vitale (Qi) circule. L'être humain est en bonne santé lorsque cette énergie est équilibrée et harmonieuse. En MTC, les maladies et leurs symptômes sont considérés comme étant des perturbations des flux énergétiques dans le corps. La MTC connaît plusieurs méthodes de thérapie pour remédier aux déséquilibres de l’énergie, comme par exemple l’acupuncture, la moxibustion, le Tui Na (massage chinois), les ventouses et la phytothérapie (thérapie par les plantes).
                    </p>
                </div>
                <div class="accueil-informations">
                    <h3>Informations pratiques</h3>
                    
					<div class="col-md-6">
						<address>
						<strong>Centre Vitalitis Lausanne</strong><br>
						David Riemarzik<br>
						Rue Saint-Martin 32<br>
						CH-1005 Lausanne<br>
						E: riemarzik@vitalitis.ch<br>
						T: +41 (0)77 438 97 25
						</address>
					</div>
					
					<div class="col-md-6">
						<strong>Horaires d'ouverture</strong><br>
						<p>
							Jeudi de 19h00 à 22h00<br>
							Vendredi de 19h00 à 22h00
						</p>
					</div>
					
					<div class="col-md-12">
                        <strong>Situation</strong>
                        <p class="p-txt-situation">
                            Situé en plein cœur de la ville de Lausanne, à deux minutes à pied de l’hôtel de police et à cinq minutes à pied de l’arrêt du M2 – Bessières sur la Rue St-Martin. <br><br>
                            Places de parc publiques à proximité.
                        </p>
                        <a class="btn btn-default btn-position-bot" href="contact.php">Voir la carte</a>
					</div>
                
                </div>
            </div>
        </div>
    </div>
    
<?php include_once('include/footer.inc.html') ?>