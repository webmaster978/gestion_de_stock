<?php require_once('Connexion.php')?>
<?php
if(isset($_POST['Inscription'])){
            if(!empty($_POST['Eleve'] OR (!empty($_POST['Classe'])))){
        
                $Eleve = $_POST['Eleve'];
                $Classe = $_POST['Classe'];
                $Section = $_POST['Section'];
                $Date = $_POST['DateInscrit'];
        
                $sql= 'INSERT INTO Inscription(Id_Identif,Id_Class,Id_Section,DateInscrit)
                values(:Eleve,:Classe,:Section,:DateInscrit)';
                $stat= $db->prepare($sql);
                if($stat->execute(['Eleve'=>$Eleve,'Classe'=>$Classe,'Section'=>$Section,'DateInscrit'=>$Date])){
                     $message =" <sppan style='color:green'>Enregistré avec succès!!! </span>";
                }
                else{
                    $message =" <sppan style='color:red'>Enregistré avec succès!!! </span>";
                }
        
                }else{
                    $message ="Completez tous les champs svp!!!";
        
                }
        
                
            }
            //  $req = 'SELECT *FROM profile_inscription';
            // $vic=$db->prepare($req);
            // $vic->execute();
            // $vics = $vic->fetchAll(PDO::FETCH_OBJ); 
            
            ?>
            <?php 
            $req ='SELECT Identification.Id,Nom,PostNom,Prenom,Sexe,TelResponsable, Classe.Designation AS Promotion,Section.Designation AS Section,DateInscrit
            FROM Inscription
            INNER JOIN Identification on Identification.Id =Inscription.Id_Identif
            INNER JOIN Classe ON Classe.Id =Inscription.Id_Class
            INNER JOIN Section ON Section.Id=Inscription.Id_Section';
            $vic=$db->prepare($req);
            $vic->execute();
            $vics = $vic->fetchAll(PDO::FETCH_OBJ); 
            
            ?>