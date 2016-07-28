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
            
            <div class="col-md-6">
                <h2>Contact</h2>
                <strong>Vous avez une question ? N'hésitez pas à m'écrire !</strong>
                
                <form action="" method="post">
				
					<div class="form-group">
						<label for="userNameSingUp">Nom</label>
						<input type="text" class="form-control" name="userNameSignUp" id="userNameSignUp" placeholder="Votre nom" >
					</div>
					
					<div class="form-group">
						<label for="userFirstNameSignUp">Prénom</label>
						<input type="text" class="form-control" name="userFirstNameSignUp" id="userFirstNameSignUp" placeholder="Votre prénom" >
					</div>
					
					<div class="form-group">
						<label for="userEmailSignup">E-mail</label>
						<input type="text" class="form-control" name="userEmailSignup" id="userEmailSignup" placeholder="Votre e-mail" >
					</div>
					
					<button type="submit" class="btn btn-default btn-form footer-away">Envoyer</button>
					
				</form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2745.2120564120064!2d6.6351675158227845!3d46.523705470141884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c2e36dbca0bf1%3A0xa67f2c9ddecaf716!2sRue+Saint-Martin+32%2C+1005+Lausanne!5e0!3m2!1sfr!2sch!4v1460025702989" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
<?php include_once('include/footer.inc.html') ?>