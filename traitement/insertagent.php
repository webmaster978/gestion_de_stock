<?php require_once('config/database.php'); ?>
<?php
if (isset($_POST['ajouter'])) {
    if (!empty($_POST['nom']) or (!empty($_POST['poste']))) {

        $nom =htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $dna = htmlspecialchars($_POST['dna']);
        $poste = htmlspecialchars($_POST['poste']);
        $montant = htmlspecialchars($_POST['montant']);
        $tel = htmlspecialchars($_POST['tel']);

        $sql = ("INSERT INTO agent  (nom,dna,poste,tel,adresse,montant) VALUES (:nom,:dna,:poste,:tel,:adresse,:montant)");

        $statement = $db->prepare($sql);
        if ($statement->execute([':nom' => $nom, ':adresse' => $adresse, ':dna' => $dna, ':poste' => $poste, ':tel' => $tel, ':montant' => $montant])) {

            $message = " <sppan style='color:green'>Enregistré avec succès!!! </span>";
        } else {
            $message = " <sppan style='color:red'>Enregistré avec succès!!! </span>";
        }
    } else {
        $message = "Completez tous les champs svp!!!";
    }
}


?>