<?php
if(!isset($_REQUEST['uc']))
     $uc = 'return_accueil';
else
    $uc = $_REQUEST['uc'];
    
    switch($uc)
{
    case'return_accueil':
        {include("vue/v_accueil.php");
        break;
    }
    case 'controleur':
            {include("controleur/controleur.php");
            break;
            }
}

?>


