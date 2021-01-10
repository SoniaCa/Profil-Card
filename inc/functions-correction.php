<?php 

function isStrValid($chaine)
{
    // tester si $chaine est une chaine de caractère
    if (is_string($chaine) === false) {
    // si non, convertir en chaine de caractère
        $chaine = strval($chaine);
    }
    // https://www.php.net/manual/fr/function.trim
    // on supprime les caractères d'espace avant et après la chaine de caractères
    $chaine = trim($chaine);
    
    return $chaine;
}

function isNbValid($number)
{
    // tester si $number est un nombre entier
    if (is_int($number) ===false) {
        // si non, convertir en nombre entier
        $number = intval($number);
    }
    return $number;
 
}

