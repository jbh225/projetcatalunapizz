

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Cataluña Pizz'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet"> 
  <link rel="stylesheet" href="projetcatalunapizz.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
  <link rel="icon" type="image/png" href="toromini.png" />
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <script src="jsgooglemap.js" type="text/javascript"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container text-center">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>                        
      		</button>
		<!--- icone -->
      		<a class="navbar-brand" href="#headeri"><img class="logonav" src="toromini.png" alt="Dispute Bills"></a>
        <!---->
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
    		<ul class="nav navbar-nav navbar-center">
        		<li><a href="#qsm">Qui sommes-nous?</a></li>
        		<li><a href="#ipratiq">Infos Pratiques</a></li>
        		<li><a href="#menu">Menus</a></li>
                <li><a href="login.php" class="adminstyl" ">Admin</a></li>
      		</ul>
    	</div>
	</div>
</nav>

<!-- HEADER -->
<div id=headeri class="container-fluid bg-1 text-center">
	<div class="imghdr">
		<h3 class="margin"></h3>
		<h2 id="titreheader">Cataluña Pizz'</h2>
		<img src="toro.jpg" class="img-responsive img-circle margin" style="display:inline" alt="taureau" width="350" height="350">

	</div>
</div>

<!-- Second Container -->
<div id="qsm" class="container-fluid bg-2 text-center">
	<h3 class="margin">Qui sommes-nous ?</h3>
	<p> Nunc turpis magna, volutpat a placerat suscipit, rutrum vel urna. Ut bibendum tortor eu pulvinar vehicula. Duis eleifend a elit a mattis.<br> Proin imperdiet hendrerit tellus, et commodo justo dapibus sit amet. Nunc quis nisi nunc donec mattis.<br>  Massa elit. Aenean lacus sapien.  Fringilla sit amet sem ac, pharetra ultrices magna.<br>  Donec eleifend, nisl vel  consectetur, odio ante auctor.<br>  Id hendrerit augue urna rutrum.</p> <br> 
	<center><img class="ombre img-responsive" src="photofoodtruck.jpg" alt="photofoodtruck" />
</div></center>

<!-- Third Container -->
<div id="ipratiq" class="container-fluid bg-4 text-center">
	<h3 class="margin">Infos pratiques</h3>
  	<div class= "row">
		<div class= "col-md-6">
  			<h4 class="titremvd">Mardi, Vendredi et Dimanche</h4>
  			<p>Parking de Carrefour Market Orléans</p><br />
			<h4 class="titrems">Mercredi (soir)</h4>
			<p>Saint-LAurent-Nouan</p><br />
  			<h4 class="titrej">Jeudi (midi et soir)</h4>
  			<p>Parking de V&B Ingré</p><br />
  			<h4 class="titress">Samedi (soir)</h4>
			 <p>Garage Orléans Pneumatiques <br />Quai St Laurent, Orleans</p>
		</div>

		<div class= "col-md-6">
			<h1>Vous pouvez nous trouver ici</h1>
			<div id="map_container">
				<div id="map">
					<iframe class="google-maps" src="https://www.google.com/maps/d/embed?mid=1Oif-2Qx2QIQD7sU3SocSYlXp_Ys" width="640" height="480"></iframe>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Third Container (Grid) -->
<div id="menu" class="container-fluid bg-3 text-center">

 	
 	<h3 class="margin-menu">Menus</h3>
    <p><strong>S= 29cm &nbsp;&nbsp;&nbsp; L = 33cm </strong></p><br/>

    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <p><strong>Pizzas tomate</strong></p>
                <img src="pizzto.jpg" alt="Paris" width="600" height="300">
                <button class="btn" data-toggle="modal" data-target="#myModalt">Voir pizzas</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <p><strong>Pizzas crème</strong></p>
                <img src="pizzcre.jpg" alt="pizza creme" width="600" height="300">
                <button class="btn" data-toggle="modal" data-target="#myModalc">Voir pizzas</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <p><strong>Pizzas dessert</strong></p>
                <img src="pizzdes.jpg" alt="dessert" width="550" height="200">
                <button class="btn" data-toggle="modal" data-target="#myModald">Voir pizzas</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->


<div class="modal-dialog">
    <div class="modal fade" id="myModalt" role="dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">Fermer</button>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="panel-body">
                <div id="menu" class="container-fluid bg-3 text-center">
                    <h3>Pizzas à base de tomate</h3>
                    <?php
                    include 'connect.php';

                     $bdd = mysqli_connect(SERVER, USER, PASS, DB);

                        mysqli_set_charset($bdd,"utf8");
                    $req = "SELECT nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
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
                    <div class=\"col-sm-6\">
                        <h3>$nom</h3>
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        
                      
                    </div>";
                    }
                    echo "</div>";

                     ?>

                 </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-dialog">
    <div class="modal fade" id="myModalc" role="dialog">	

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">Fermer</button>
                <button type="button" class="close" data-dismiss="modalc"></button>
            </div>
            <div class="panel-body">
                <div id="menu" class="container-fluid bg-3 text-center">
                    <h3 class="margin">Pizzas à base de crème </h3>

                    <?php
                    include 'connect.php';

                    $bdd = mysqli_connect(SERVER, USER, PASS, DB);

                    mysqli_set_charset($bdd,"utf8");
                    $req = "SELECT nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
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
                    <div class=\"col-sm-6\">
                        <h3>$nom</h3>
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        
                      
                    </div>";
                    }
                    echo "</div>";

                    ?>


                </div>
            </div>
        </div>
    </div>

</div>


    <div class="modal-dialog">
    <div class="modal fade" id="myModald" role="dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">Fermer</button>
                <button type="button" class="close" data-dismiss="modalc"></button>
            </div>
            <div class="panel-body">
                <div id="menu" class="container-fluid bg-3 text-center">
                    <h3 class="margin">Pizzas dessert</h3>


                    <?php
                    include 'connect.php';

                    $bdd = mysqli_connect(SERVER, USER, PASS, DB);

                    mysqli_set_charset($bdd,"utf8");
                    $req = "SELECT nom_du_produit, sur_quelle_base, ingredients, taille, prix, taillel, prixl
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
                    <div class=\"col-sm-6\">
                        <h3>$nom</h3>
                        <h4>$ingredients</h4>
                        <h4>$taille: $prix</h4>
                        <h4>$taillel: $prixl</h4>
                        
                      
                    </div>";
                    }
                    echo "</div>";

                    ?>



                </div>
             
            </div>
        </div>
    </div>
</div>


	<div class="bg-12 text-center">
		<p class=p12>100% Fromage (emmental, mozzarella)</br>Toutes nos pizzas peuvent être adaptées en fonctions de vos goûts:</br>Base tomate, crèmes fraîche ou aillée</br>Supplément viande et fromage : 1,20€</br>Autres supplément: 0.50€</p>
	</div>


	<div class="jumbotron">
		<div class="text-center">
			<span class="picp"><center><strong>Cuisine 100% faite maison et 100% bueno</strong></center></span>					
		</div>
	</div>
		



	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel"> 
<!-- Indicators --> 
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
			<li data-target="#myCarousel" data-slide-to="1"></li> 
			<li data-target="#myCarousel" data-slide-to="2"></li> 
		</ol> 
<!-- Wrapper for slides --> 
				<h1 class="avis">Nos clients disent: </h1>
		<div class="carousel-inner" role="listbox"> 
			<div class="item active"> 
				<h4>"Ce sont les meilleurs pizzas espagnols que j'ai mangé!"<br><span style="font-style:normal;">David <br>Wild code school</span></h4> 
			</div> 
			<div class="item"> <h4>"Muy bueno ces pizzas "<br><span style="font-style:normal;">Jean-Baptiste<br>Wild code school</span></h4> 
			</div> 
			<div class="item"> <h4>"Hola! Hola! muy calor ces pizzas"<br><span style="font-style:normal;">Jason <br> Wild code school,</span></h4> 
			</div> 
		</div>



<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>

	</div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center"> 
	<h2 class ="slogan">Des produits de qualité pour des pizzas à tomber</h2>
	<a href="https://www.facebook.com/catalunapizz/" = target="_blank"><img src="fb.png" alt="facebook"></a> 
	<a href="https://twitter.com/CatalunaPizz" = target="_blank"><img src="twitter.png" alt="Twitter" />
	</a>
	<h3>06 51 75 79 20</h3> <br /> 
	<h3 class="droits">Cataluña Pizz' - Tous droits réservés - 2017</h3><br>
	<button class="btn" data-toggle="modal" data-target="#myModal">Mentions légales</button>

				<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				    
				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"></button>
						<h4> Mentions légales</h4>
						</div>
						<div class="modal-body">
						<h4>La société</h4>
						
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc turpis magna, volutpat a placerat suscipit, rutrum vel urna. Ut bibendum tortor eu pulvinar vehicula. Duis eleifend a elit a mattis. Proin imperdiet hendrerit tellus, et commodo justo dapibus sit amet. Nunc quis nisi nunc. Donec mattis massa elit. Aenean lacus sapien, fringilla sit amet sem ac, pharetra ultrices magna. Donec eleifend, nisl vel accumsan consectetur, odio ante auctor erat, id hendrerit augue urna rutrum neque. Fusce pellentesque a leo ut vestibulum. Curabitur rutrum leo in auctor lobortis. Vivamus in risus turpis. Donec et cursus odio, at fermentum dolor. Nullam nec semper eros, in ornare massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras non varius tellus. Donec elementum, est ut bibendum imperdiet, nunc lectus sodales erat, nec iaculis tortor sem eget lectus.
						</h4>
						<h4>L'hébergement</h4>
						<h4>Integer ut ex bibendum quam pharetra dictum ac vitae tortor. Ut tortor ante, bibendum sit amet augue at, lacinia auctor mauris. Praesent suscipit dui massa, sit amet accumsan risus iaculis vitae. Vivamus eros risus, viverra ac scelerisque eget, mattis et libero. Nullam luctus nisl sed tortor aliquam, quis pretium ex porta. Ut suscipit orci a arcu mollis, vitae feugiat metus blandit. Praesent convallis tincidunt tortor, sit amet pulvinar mauris lobortis ut. Cras ornare sed massa ut fringilla. Maecenas nec neque quis lorem commodo volutpat id eu enim. Maecenas iaculis consectetur venenatis. Aenean vel mauris consequat, aliquet libero non, pulvinar magna. In in auctor velit. Fusce varius nibh nulla. Duis eget massa ac massa bibendum rhoncus at eget felis.
 						</h4>
						
						</div>
						
				</div>
				</div>
		</div>



</footer>
</body>
</html>