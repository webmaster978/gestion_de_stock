<?php
      include("traitement/Connexion.php");
      if(isset($_POST['submit']))
      {
          $mailconnect = htmlspecialchars($_POST['mailconnect']);
		$passwordconnect = htmlspecialchars($_POST['passwordconnect']);
        if(!empty($_POST['mailconnect']) AND !empty($_POST['passwordconnect']))
        {


          $mailconnectlength = strlen($mailconnect);
          if ($mailconnectlength <= 100)
         {
            $requser = $db->prepare("SELECT * 
										FROM t_compte
										WHERE MailCompte=? AND PasswordCompte=?");
            $requser->execute(array($mailconnect, $passwordconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1)
            {
              
              $userinfo = $requser->fetch();
              $_SESSION['Id']=$userinfo['Id'];
              $_SESSION['MailCompte']=$userinfo['MailCompte'];
              $_SESSION['Username']=$userinfo['Username'];
              $_SESSION['userconnect'] = true;
              
              header("Location: accueil.php?id=".$_SESSION['Id']);
              
            }
            else
            {
              
              $error = "mail ou password incorrect";
              header("Location: index.php");
            }
            
          }
          else
          {
            $error = "Le nombre des caracteres ne doit pas avoir plus 100 caracteres";
          }
        }
        else
        {
          $error = "Completer tous les champs svp";
        }
      }
?>