<!DOCTYPE html>
<html>
<head>
<link href="boostrap.css" rel="stylesheet">
<link href="formulaire.css" rel="stylesheet">
	<title>formulaire php</title>
</head>
<body>

<?php

include 'file_connect2.php';
	$bdd = mysqli_connect(SERVER, USER, PASS, DB);


$prenom = $_POST['prenom'];
$date_derniere_commande = $_POST['date_derniere_commande'];
$dernier_plat = $_POST['dernier_plat'];
$recommandation = $_POST['recommandation'];
$suggestion = $_POST['suggestion'];


mysqli_query($bdd, "INSERT INTO pizz (prenom, date_derniere_commande, dernier_plat, recommandation, suggestion)	VALUES ('$prenom', '$date_derniere_commande', '$dernier_plat', '$recommandation', '$suggestion')");

?>

<h1>Si vous avez déjà commandé chez nous, <br />
Votre avis nous intéresse</h1>
<form method= "post" action="formulairetest1.php" method= "post">

<!--Prenom-->
          <div class="form-group">
                <label for="inputEmail3" class="col-xs-4 control-label">Prénom</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="prenom" id="inputEmail3">
                </div>

          </div>

          <br />

          <!--date de la derniere commande-->
          <div class="form-group">
                <label for="dernier_plat_commande" class="col-xs-4 control-label">date de la dernière commande</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="plat commandé" name="date_derniere_commande" placeholder="date derniere commande">
                </div>
          </div>

        <br />
          <!--dernier plat commandé-->
          <div class="form-group">
                <label for="inputEmail3" class="col-xs-4 control-label">Dernier plat commandé</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="dernier_plat" id="inputEmail3">
                </div>

          </div>

          <br />
          <!--Recommanderiez-vous nos plats à vos amis?-->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="radio">
                <label>
                Recommanderiez-vous nos produits à vos amis?
                <br />
                <input type="radio" name="recommandation" value="oui" checked> oui
                <input type="radio" name="recommandation" value="non" checked> non <br>

                </label>
              </div>
            </div>
          </div>

          <br />

        <!--Des suggestions?-->
          <div class="form-group">
                <label for="inputEmail3" class="col-xs-4 control-label">Des suggestions?</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="suggestion" id="inputEmail3">
                </div>

          </div>

          <br />

          <!--bouton envoyer-->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" value="envoyer" name="envoyer"/>

            </div>
          </div>
    </form>



</body>
</html>