<?php require_once('connexion.php') ?>
<?php
if (isset($_POST['ajouter'])) {
    if (!empty($_POST['produit']) or (!empty($_FILES['prix']))) {

        $client = $_POST['client'];
        $produit = $_POST['produit'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $prix_total = $prix * $quantite;
        $qte = $_POST['qte'];
        $qte = $qte - $quantite;

        $req = $db->prepare("UPDATE stock SET qte=:qte");
        $req->execute(array(

            'qte' => $qte
        ));



        $sql = ("INSERT INTO vente  (client,produit,quantite,prix,prix_total) VALUES (:client,:produit,:quantite,:prix,:prix_total)");

        $statement = $db->prepare($sql);
        if ($statement->execute([':client' => $client, ':produit' => $produit, ':quantite' => $quantite, ':prix' => $prix, ':prix_total' => $prix_total])) {

            header('location:../vente.php');

            $message = " <sppan style='color:green'>Enregistré avec succès!!! </span>";
        } else {
            $message = " <sppan style='color:red'>Enregistré avec succès!!! </span>";
        }
    } else {
        $message = "Completez tous les champs svp!!!";
    }
}


?>