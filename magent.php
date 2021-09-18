<?php 
 include'config/database.php';
 if(isset($_POST['modifier']))
 extract($_POST);
 $modif = $db->prepare("UPDATE agent SET nom=:nom,dna=:dna,poste=:poste,tel=:tel,adresse=:adresse WHERE id=:id");

 $res = $modif->execute(array(
     'id' => htmlspecialchars($id),
     'nom' =>htmlspecialchars($nom),
     'dna' =>htmlspecialchars($dna),
     'poste' =>htmlspecialchars($poste),
     'tel' =>htmlspecialchars($tel),
     'adresse' => htmlspecialchars($adresse)
 ));
 if($res){
     header('location: agent.php');
 } else {
     header('location: agent.php');
 }
?>