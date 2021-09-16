<?php require_once('Connexion.php')?>
<?php
if(isset($_POST['Ajouter'])){
	if(!empty($_POST['NomComplet']) OR (!empty($_FILES['Mot_pass']))){

	$NomComplet=$_POST['NomComplet'];	
    $Adress=$_POST['Adress'];
    $Email =$_POST['Email'];
    $Mot_pass =$_POST['Mot_pass'];
    $Qualification= $_POST['Qualification'];

    $sql='INSERT INTO Enseignant(NomComplet,Adresse,Email,Mot_pass,Qualification) 
    values(:NomComplet,:Adress,:Email,:Mot_pass,:Qualification)';
    $statement=$db->prepare($sql);
    if($statement->execute([':NomComplet'=>$NomComplet,':Adress'=>$Adress,':Email'=>$Email,':Mot_pass'=>$Mot_pass,':Qualification'=>$Qualification])){
        
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

    <?php     $sql='select *from Enseignant';
        $statement=$db->prepare($sql);
        $statement->execute();
        $chargement=$statement->fetchAll(PDO::FETCH_OBJ);?>
  