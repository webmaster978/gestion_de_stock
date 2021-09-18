<?php require_once('config/database.php') ?>
<?php
if (isset($_POST['ajouter'])) {
   extract($_POST);
    $client= $db->prepare("INSERT INTO client (nom,genre,adresse,contact) VALUES (:nom,:genre,:adresse,:contact)");
    $res=$client->execute(array(
        'nom' =>htmlspecialchars($nom),
        'genre' =>htmlspecialchars($genre),
        'contact' =>htmlspecialchars($contact),
        
        'adresse' =>htmlspecialchars($adresse)
    ));
    if($res){
        echo'valider';
        // header('location:agent.php');
    }else{
        echo'err';
        // header('location:agent.php');
    }
}


?>