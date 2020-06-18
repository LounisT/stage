<?php


function send_mail()
{
     $send_to="benayad.amine.sio@gmail.com";

    
     $subject_mail = $_POST ['subject'];
     $message_mail = '<html>';
     $message_mail .= '<body>';

     if($_POST['lastname'] == "")
     {
         $message_mail .= '<p>'."Bonjour, ".'<br>'."Vous avez reçu un message de ".$_POST['firstname'].'</p>';
     }

     else
     {
        $message_mail .= '<p>'."Bonjour, ".'<br>'."Vous avez reçu un message de ".$_POST['firstname']." ".$_POST['lastname'].'</p>';
     }
     $message_mail .='<p>'."Adresse email: ".$_POST['email'].'</p>';
     $message_mail .= '<p>'.'<strong>'.'<br>'."Objet du message : ".'</strong>'.$subject_mail.'</p>';
     $message_mail .= '<p>'.'<strong>'."contenu du message: ".'</strong>'.'</p>';
     $message_mail .= '<p>'.($_POST['message']).'</p>';
     $message_mail .= '</body>';
     $message_mail .= '</html>';
      
     $email = $_POST['email'];
     
     $headers = "From: <".$email.">\n";
     $headers .= "Reply-To: ".$email."\n";
     $headers .='MINE-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
     mail($send_to, $subject_mail, $message_mail, $headers);

}

if( isset($_POST['sendMail']))
{
    send_mail();
    include("../vue/v_valider.php");
}
?>


