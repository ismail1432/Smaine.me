<?php
        
        $mail = 'smaine.milianni@gmail.com';
        // Déclaration de l'adresse de destination.
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }
        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = "Message de  " . $_POST['name'] . $passage_ligne . $passage_ligne .
       
        "Message partie php" . $_POST['message']  . $passage_ligne .
       // "Telephone : " . $_POST['phone'] . $passage_ligne .
        "email " . $_POST['mail']  . $passage_ligne . $passage_ligne .
        
        
        $message_html = "<html><head></head><body>Message de " . $_POST['name'] ."<br /><br /> 
        <strong>Message : </strong> " . $_POST['message'] .  "<br /> 
       
        <strong>email : </strong>" . $_POST['mail'] . "<br />
        
         </body></html>";
        //==========
        
        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========
         
        //=====Définition du sujet.
        $sujet = "Message laisser sur le site smaine.me";
        //=========
         
        //=====Création du header de l'e-mail.
        $header = "From: \"MyCvsite\"<smaine.milianni@gmail.com>".$passage_ligne;
        $header.= "Reply-to: \"MyCvsite\" <smaine.milianni@gmail.com>".$passage_ligne;
        $header .= "Bcc: <smaine.milianni@gmail.com>" .$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========
         
        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //==========   
        //=====Envoi de l'e-mail.
        mail($mail,$sujet,$message,$header);
       
          

     
?>
