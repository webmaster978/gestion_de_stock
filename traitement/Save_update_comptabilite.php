<?php require_once('Connexion.php');?>
<?php  $req ='SELECT * FROM payement'; ?>
<?php 
    if(isset($_POST['AddP'])){
        if(!empty($_POST['names'] OR (!empty($_POST['montant'])))){
            $Montant = $_POST['montant'];
            $Typep = $_POST['TypeP'];
            $Name = $_POST['names'];

            // $Sql ='INSERT INTO payement(Montant,Id_TypePaiment,Id_Inscrit,DatePaie) VALUES(:montant,:TypeP,:names,:date('Y-m-d'))';
            // $stat= $db->prepare($Sql);
            $sql = $db->prepare('INSERT INTO Payement(Montant,Id_TypePaiment,Id_Inscrit) VALUES(?,?,?)');
            $sql->execute(array($Montant,$Typep,$Name));
        //     if($stat->execute(['montant'=>$Montant,'TypeP'=>$Typep,'names'=>$Name])){
        //         $message =" <sppan style='color:green'>Enregistré avec succès!!! </span>";
        //    }
        //    else{
        //        $message =" <sppan style='color:red'>Enregistré avec succès!!! </span>";
        //    }
        // exit('Enregistré avec succès!!!');
   
        //    }else{
        //        $message ="Completez tous les champs svp!!!";
         }

    }


?>
