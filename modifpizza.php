<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel= "stylesheet" href="modifpizza.css" >
    <title>Modif pizza</title>
</head>
<body>

<div id=headeri class="container-fluid bg-1 text-center">
    <h1>Modification pizzas </h1>
    <h2 id="titreheader">Cataluña Pizz'</h2>
    <div class="imghdr">
        <h3 class="margin"></h3>
        <img src="toro.jpg" class="img-responsive img-circle margin" style="display:inline" alt="taureau" width="350" height="350">

    </div>
</div>








<div class="container">
    <h1>Pizzas base tomate</h1>
    <div class="row">
        <div class="col-sm-12">

            <?php
            include 'connect.php';

            $bdd = mysqli_connect(SERVER, USER, PASS, DB);

            mysqli_set_charset($bdd,"utf8");
            $req = "SELECT idnew_table, nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
                            FROM form WHERE sur_quelle_base ='tomate'";
            $res = mysqli_query($bdd, $req);


            echo "<div class=\"row\">";

            while($data = mysqli_fetch_assoc($res))
            {$nom=$data['nom_du_produit'];
                $ingredients=$data['ingredients'];
                $taille=$data['taille'];
                $prix=$data['prix'];
                $taillel=$data['taillel'];
                $prixl=$data['prixl'];
                echo "
                    <div class=\"col-sm-4\">
                        <h3>$nom</h3>
                        <img src=\"pizzto.jpg\" alt=\"Paris\" width=\"300\" height=\"200\">
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        <form method=\"POST\" action=\"deletepizz.php\">
                        <input type=\"hidden\" name=\"id\" value=\"".$data['idnew_table']."\"/>
                        <input  class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"delete\"/>
                        </form>
                      
                    </div>";
            }
            echo "</div>";

            ?>

        </div>
    </div>
</div>


<div class="container">
    <h1>Pizzas base creme</h1>
    <div class="row">
        <div class="col-sm-12">
            <?php
            include 'connect.php';

            $bdd = mysqli_connect(SERVER, USER, PASS, DB);

            mysqli_set_charset($bdd,"utf8");
            $req = "SELECT idnew_table, nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
                            FROM form WHERE sur_quelle_base ='creme'";
            $res = mysqli_query($bdd, $req);


            echo "<div class=\"row\">";

            while($data = mysqli_fetch_assoc($res))
            {$nom=$data['nom_du_produit'];
                $ingredients=$data['ingredients'];
                $taille=$data['taille'];
                $prix=$data['prix'];
                $taillel=$data['taillel'];
                $prixl=$data['prixl'];
                echo "
                    <div class=\"col-sm-4\">
                        <h3>$nom</h3>
                        <img src=\"pizzcre.jpg\" alt=\"pizza creme\" width=\"300\" height=\"200\">
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        <form method=\"POST\" action=\"deletepizz.php\">
                        <input type=\"hidden\" name=\"id\" value=\"".$data['idnew_table']."\"/>
                        <input  class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"delete\"/>
                        </form>
                      
                    </div>";
            }
            echo "</div>";

            ?>
        </div>
    </div>
</div>




<div class="container">
    <h1>Pizzas dessert</h1>
    <div class="row">
        <div class="col-sm-12">
            <h3>La Jamon</h3>
            <?php
            include 'connect.php';

            $bdd = mysqli_connect(SERVER, USER, PASS, DB);

            mysqli_set_charset($bdd,"utf8");
            $req = "SELECT idnew_table, nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
                            FROM form WHERE sur_quelle_base ='dessert'";
            $res = mysqli_query($bdd, $req);


            echo "<div class=\"row\">";

            while($data = mysqli_fetch_assoc($res))
            {$nom=$data['nom_du_produit'];
                $ingredients=$data['ingredients'];
                $taille=$data['taille'];
                $prix=$data['prix'];
                $taillel=$data['taillel'];
                $prixl=$data['prixl'];
                echo "
                    <div class=\"col-sm-4\">
                        <h3>$nom</h3>
                        <img src=\"pizzdes.jpg\" alt=\"dessert\" width=\"300\" height=\"200\">
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        <form method=\"POST\" action=\"deletepizz.php\">
                        <input type=\"hidden\" name=\"id\" value=\"".$data['idnew_table']."\"/>
                        <input  class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"delete\"/>
                        </form>
                    </div>";
            }
            echo "</div>";

            ?>
        </div>
    </div>
</div>

<footer>
    <p class="footer">Cataluna Pizz - 2017</p>
    <br />

    <a href="pageadmin.php" = target="_blank"><h3>Retour</h3></a>
</footer>



</body>
</html>

