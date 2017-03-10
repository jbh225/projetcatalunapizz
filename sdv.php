<?php

include 'header.php';
include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
$textButton = 'Créer';
$nom = $base = $ingredients = $taille = $description = $type = $id='';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $req = "SELECT * FROM eleve WHERE idnew_table=$id";
    $res = mysqli_query($bdd, $req);
    while($data = mysqli_fetch_assoc($res)) {
        $civilite = $data['civilite'];
        $prenom = $data['prenom'];
        $nom = $data['nom'];
        $date_naissance = $data['date_naissance'];
        $description = $data['description'];
        $type = $data['type'];
    }
    $textButton = 'Modifier';
}


// Je teste que mon tableau ne soit pas vide.
if (!empty($_POST)) {
    // je securise mes données
    foreach ($_POST as $key=>$data) {
        $postClean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
    }

    // Je valide que le nom soit rempli.
    if (isset($_POST['btnSubmit'])) {
        $civilite = $postClean['civilite'];
        $prenom = $postClean['prenom'];
        $nom = $postClean['nom'];
        $date_naissance = $postClean['date_naissance'];
        $description = $postClean['description'];
        $type = $postClean['type'];
        $id = $postClean['id'];

        if ($id) {
            $req = "UPDATE eleve SET 
                civilite='$civilite', prenom='$prenom', nom='$nom', 
                date_naissance='$date_naissance', description='$description', type='$type' WHERE id=$id";
            echo $req;
        } else {
            $req = "INSERT INTO eleve (civilite, prenom, nom, date_naissance, description, type) VALUES 
                ('$civilite', '$prenom', '$nom', '$date_naissance', '$description', '$type')";
        }

        if (mysqli_query($bdd, $req)) {
            header('Location: index.php');
        }


    }
}