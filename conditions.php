<?php
/**comentaire
 * "=="(égalité)
 * "==="(égalité strict,pour le meme type)
 * "!="(inégalité)
 * "||"(ou logique)
 * "!"(non logique)
 *
 *
 *
 * */
$name="benoit";
$age=true;
if ($name=="benoit" && $age===true) {

    echo "je m'appelle". $name ."\n";
}else{

    echo "pas de nom \n";
}

switch ($name){
    case "benoit":
        echo "je m'appelle". $name ."\n";
        break;
    default:
        echo "pas de nom \n";

}

?>