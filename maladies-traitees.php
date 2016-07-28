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
	

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
<body>

    <header class="header">
        <div class="container">
        
            <div class="row">
                <div class="col-sm-4 left-picture header-picture">
                    <img alt="symbole chinois" src="images/img-header/img-gauche.png">
                </div>

                <div class="col-sm-4 div-header-title">
                    <h1 class="header-title1">David Riemarzik</h1>
                    <hr class="hr-header-subtitle">
                    <h2 class="header-title2">Acupuncture</h2>
                </div>

                <div class="col-sm-4 right-picture header-picture">
                    <img alt="symbole chinois" src="images/img-header/img-droite.png">
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-12 navigation">
                    <nav class="menu">
                        <ul class="menu-list">
                            <li class="menu-inline"><a class="btn active" href="index.php">Accueil</a></li>
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
            
            <div class="col-md-12">
                <div>
                    <h2 class="h2-position">Maladies traitées</h2>
                    <p>Selon l'Organisation mondiale de la santé (OMS), la médecine traditionnelle chinoise a un effet bénéfique sur les maladies suivantes :</p>
                </div>
                
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>Maladies Neurologiques</h3>
                        <ul>
                            <li>Maux de tête</li>
                            <li>Migraine</li>
                            <li>Parésie faciale (paralysie d'un nerf facial)</li>
                            <li>Névralgie du trijumeau</li>
                            <li>Acouphène</li>
                            <li>Stress</li>
                            <li>Fatigue</li>
                            <li>Diminution de la concentration</li>
                            <li>Insomnie</li>
                            <li>Dépression</li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3>Maladies Orthopédiques</h3>
                        <ul>
                            <li>Maladie de l'articulation de l'épaule</li>
                            <li>Epicondylite</li>
                            <li>Douleurs cervicales</li>
                            <li>Hernie discale</li>
                            <li>Lombalgies et lumbago</li>
                            <li>Sciatique</li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3>Maladies de l'appareil digestif</h3>
                        <ul>
                            <li>Inflammation aiguë/chronique de la muqueuse gastrique</li>
                            <li>Ulcère chronique</li>
                            <li>Inflammation intestinale aiguë/chronique</li>
                            <li>Constipation</li>
                            <li>Obésité</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-12 footer-away">
                    <div class="col-lg-4">
                        <h3>Maladie Génito-urinaires</h3>
                        <ul>
                            <li>Dysménorrhée</li>
                            <li>Règles irrégulières</li>
                            <li>Trouble de la ménopause</li>
                            <li>Hyperplasie de la prostate</li>
                            <li>Prostatite</li>
                            <li>Impuissance</li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3>Maladies des voies respiratoires</h3>
                        <ul>
                            <li>Asthme bronchique</li>
                            <li>Sinusite frontale et maxillaire aiguë/chronique</li>
                            <li>Rhinite</li>
                            <li>Allergie de toutes natures</li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3>Maladies de la peau</h3>
                        <ul>
                            <li>Eczémas</li>
                            <li>Acné</li>
                            <li>Zona</li>
                            <li>Trouble de la cicatrisation</li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
<?php include_once('include/footer.inc.html') ?>