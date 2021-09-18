<?php require_once('Connexion.php')?>
<?php
if(isset($_POST['Add'])){
	if(!empty($_POST['Nom']) OR (!empty($_FILES['Photo']))){

	$Nom=$_POST['Nom'];	
    $PostNom=$_POST['PostNom'];
    $Prenom =$_POST['Prenom'];
    $Sexe =$_POST['Sexe'];
    $DateNaiss= $_POST['DateNaiss'];
    $LieuNaiss= $_POST['LieuNaiss'];
    $NomPere= $_POST['NomPere'];
    $Tel =$_POST['TelRespo'];
    $Adress= $_POST['Adress'];
    $Photo= $_POST['Photo'];
    
    
    $sql='INSERT INTO Identification(Nom,PostNom,Prenom,Sexe,DateNaiss,LieuNaiss,NomPere,TelResponsable,AdressPysique,Photo) 
    values(:Nom,:PostNom,:Prenom,:Sexe,:DateNaiss,:LieuNaiss,:NomPere,:TelRespo,:Adress,:Photo)';
    $statement=$db->prepare($sql);
    if($statement->execute([':Nom'=>$Nom,':PostNom'=>$PostNom,':Prenom'=>$Prenom,':Sexe'=>$Sexe,':DateNaiss'=>$DateNaiss,':LieuNaiss'=>$LieuNaiss,':NomPere'=>$NomPere,':TelRespo'=>$Tel,':Adress'=>$Adress,':Photo'=>$Photo])){
        
        $message =" <sppan style='color:green'>Enregistré avec succès!!! </span>";
        }
        else{
            $message =" <sppan style='color:red'>Enregistré avec succès!!! </span>";
        }

        }else{
            $message ="Completez tous les champs svp!!!";

        }

    
    
    }


    ?>

    <?php     $sql='select *from Identification';
        $statement=$db->prepare($sql);
        $statement->execute();
        $chargement=$statement->fetchAll(PDO::FETCH_OBJ);?>
  