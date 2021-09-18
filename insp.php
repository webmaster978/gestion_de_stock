<?php require_once('config/database.php') ?>
<?php
if (isset($_POST['ajouter'])) {
    if (!empty($_POST['produits']) or (!empty($_FILES['prix']))) {

        $produits = $_POST['produits'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $qte = $_POST['qte'];
        $qte = $qte + $quantite;

        $req = $db->prepare("UPDATE stock SET qte=:qte");
        $req->execute(array(

            'qte' => $qte
        ));

        $sql = ("INSERT INTO produit (produits,quantite,prix) VALUES (:produits,:quantite,:prix)");

        $statement = $db->prepare($sql);
        if ($statement->execute([':produits' => $produits, ':quantite' => $quantite, ':prix' => $prix])) {

            header('location:produit.php');

            $message = " <sppan style='color:green'>Enregistré avec succès!!! </span>";
        } else {
            $message = " <sppan style='color:red'>Enregistré avec succès!!! </span>";
        }
    } else {
        $message = "Completez tous les champs svp!!!";
    }
}


?>