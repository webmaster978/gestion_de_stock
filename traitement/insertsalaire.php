<?php require_once('connexion.php') ?>
<?php
if (isset($_POST['ajouter'])) {
    if (!empty($_POST['nom']) or (!empty($_POST['salaire']))) {

        $nom = $_POST['nom'];
        $salaire = $_POST['salaire'];
        $devise = $_POST['devise'];
        

        $sql = ("INSERT INTO payement (nom,salaire,devise) VALUES (:nom,:salaire,:devise)");

        $statement = $db->prepare($sql);
        if ($statement->execute([':nom' => $nom, ':salaire' => $salaire, ':devise' => $devise])) {

            header('location:../salaire.php');

            $message = " <sppan style='color:green'>Enregistré avec succès!!! </span>";
        } else {
            $message = " <sppan style='color:red'>Enregistré avec succès!!! </span>";
        }
    } else {
        $message = "Completez tous les champs svp!!!";
    }
}


?>