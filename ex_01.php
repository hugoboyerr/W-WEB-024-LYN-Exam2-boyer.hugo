<?php
function rev_epur_str($chaine = FALSE){
    if($chaine !== FALSE){
    $chaine1 =trim(preg_replace("/[\s,]+/",' ', $chaine));
    $chaine2 =  preg_split("/[\s,]+/",$chaine1);
    $chaine =  implode(array_reverse($chaine2));
    return  strtr($chaine, $chaine2);  
    }
    else {
        return FALSE;
    }
}

