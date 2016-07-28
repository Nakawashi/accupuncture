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
                <h2>Tarifs et remboursements</h2>
                
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                        <th>Type de massage</th>
                        <th>Description</th>
                        <th>Prix</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                        <td>Séance d'une heure</td>
                        <td>Acupuncture, Massage Tuina, Moxibustion, Ventouses</td>
                        <td>120 CHF</td>
                        </tr>
                        <tr>
                        <td>Massage relaxant</td>
                        <td>Aux huiles essentielles</td>
                        <td>80 CHF</td>
                        </tr>
                        <tr>
                        <td>Massage AMMA 15 minutes</td>
                        <td>Assis</td>
                        <td>20 CHF</td>
                        </tr>
                    </tbody>
                </table>
				
				<br>
				
                <p>Le règlement s’effectue en espèces après chaque consultation.</p>
                
                <p>Thérapeute agréé ASCA, les traitements peuvent être en partie remboursés par les assurances complémentaires pour médecine alternative selon votre police d'assurance. Veuillez vérifier avec votre assureur pour plus de détails.</p>
				
				<p><strong>Les massages ne sont pas pris en charge par les assurances complémentaires. </strong></p>
                    
                <p>En cas d’annulation au minimum 24h à l’avance, les séances ne vous seront pas facturées.</p>
                
            </div>
           
        </div>
    </div>
    
<?php include_once('include/footer.inc.html') ?>