<?php require_once('config/database.php') ?>
<?php
if (isset($_POST['ajouter'])) {
   extract($_POST);
    $agent= $db->prepare("INSERT INTO agent (nom,dna,poste,tel,adresse) VALUES (:nom,:dna,:poste,:tel,:adresse)");
    $res=$agent->execute(array(
        'nom' =>htmlspecialchars($nom),
        'dna' =>htmlspecialchars($dna),
        'poste' =>htmlspecialchars($poste),
        'tel' =>htmlspecialchars($tel),
        'adresse' =>htmlspecialchars($adresse)
    ));
    if($res){
        header('location:agent.php');
    }else{
        header('location:agent.php');
    }
}


?>