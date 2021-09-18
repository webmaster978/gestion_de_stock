<?php require_once('Connexion.php');?>
<?php 
    if(isset($_POST['Cotation_1er'])){
        if(!empty($_POST['Eleve'] OR (!empty(['Cours'])))){
            $Eleve = $_POST['Eleve'];
            $Cours = $_POST['Cours'];
            $Cote = $_POST['Cote'];
            $Periode = $_POST['Periode'];

            // $Sql ='INSERT INTO payement(Montant,Id_TypePaiment,Id_Inscrit,DatePaie) VALUES(:montant,:TypeP,:names,:date('Y-m-d'))';
            // $stat= $db->prepare($Sql);
            $db->query("INSERT INTO Note(Id_Inscrit,Id_Cours,Id_Periode,Cote) VALUES($Eleve,$Cours,$Cote,$Periode)");
       
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