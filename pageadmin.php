<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<?php

include 'connect.php';

$bdd = mysqli_connect(SERVER, USER, PASS, DB);
mysqli_set_charset($bdd,"utf8");





if (!empty($_POST)) {
 //je securise mes données
foreach ($_POST as $key=>$data) {
$postClean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
}

//var_dump($postClean);
if (isset($_POST['btnSubmit'])) {

    $nom_du_produit =$postClean['nom_du_produit'];
    $sur_quelle_base =$postClean['sur_quelle_base'];
    $ingredients =$postClean['ingredients'];
    $taille =$postClean['taille'];
    $prix =$postClean['prix'];
    $taillel =$postClean['taillel'];
    $prixl =$postClean['prixl'];


 $res = mysqli_query($bdd, "INSERT INTO form (nom_du_produit,sur_quelle_base, ingredients, taille, prix, taillel, prixl) 
                    VALUES ('$nom_du_produit', '$sur_quelle_base', '$ingredients', '$taille', '$prix', '$taillel', '$prixl')");

if (!$res) {
    echo mysqli_error($bdd);
}
}}
?>

<head>
    <title>Page admin Cataluna Pizz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="pageadmin.css">
</head>
<body>
<div id=headeri class="container-fluid bg-1 text-center">
    <h1>Bienvenue sur la page admin de: </h1>
    <h2 id="titreheader">Cataluña Pizz'</h2>
    <div class="imghdr">
        <h3 class="margin"></h3>
        <img src="toro.jpg" class="img-responsive img-circle margin" style="display:inline" alt="taureau" width="350" height="350">

    </div>
</div>


<div class="container">
    <h3>Souhaitez-vous ajouter un nouveau produit?</h3>
    <form method="post" action="pageadmin.php">
        <div class="form-group">
            <label for="produit">Nom du produit</label>
            <input type="produit" name="nom_du_produit" class="form-control" id="produit" placeholder="Nom du produit">
        </div>
    


        <div class="radio">
            <h4>Sur quelle base:</h4><br/>
            <label><input type="radio" name="sur_quelle_base" value="Tomate" checked="Tomate" /> Tomate</label>
            <label><input type="radio" name="sur_quelle_base" value="Creme" checked="Crème" /> Crème</label>
            <label><input type="radio" name="sur_quelle_base" value="Dessert" checked="Dessert" /> Dessert</label>
        </div>
        <br/>



        <div class="form-group">
            <label for="comment">Ingrédients:</label>
            <textarea class="form-control" rows="5" id="comment"name="ingredients"></textarea>

        </div>


        <div class="radio">
            <h4>Taille:</h4><br/>
            <label><input type="radio" name="taille" value="S" checked="S" /> S &nbsp;&nbsp;29cm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="taille" value="L" checked="L" /> L&nbsp;&nbsp; 33cm </label>
        </div>


        <div class="form-group">
            <label for="produit">Prix</label>
            <input type="prix" name="prix" class="form-control" id="prix" placeholder="prix">
        </div>

        <br/>

        <div class="radio">
            <h4>Taille l:</h4><br/>
            <label><input type="radio" name="taillel" value="S" checked="S" /> S &nbsp;&nbsp;29cm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="taillel" value="L" checked="L" /> L&nbsp;&nbsp; 33cm </label>
        </div>



        <div class="form-group">
            <label for="produit">Prixl</label>
            <input type="prix" name="prixl" class="form-control" id="prix" placeholder="prix">
        </div>



        <input class="btn btn-default" type="reset" name="btnReset" value="Effacer" />
        <input class="btn btn-success" type="submit" name="btnSubmit" value="Ajouter" />
        <br/>
        <a href="modifpizza.php" = target="_blank"> <button type="button" class="btn btn-primary">Modifier les pizzas existantes</button></a>
        

    </form>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<footer>
    <p class="footer">Cataluna Pizz - 2017</p>
<br />

<a href="login.php" = target="_blank"><h3>Se déconnecter?</h3></a>
</footer>



</body>
</html>
