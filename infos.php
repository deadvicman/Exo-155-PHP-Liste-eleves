<?php
require "database.php";

if (isset($_GET["perso"])){
    $perso = $myArray[$_GET['perso']];
}
//
//    if ($perso > 3){
//        $perso = 3;
//    } else if($perso <= 0){
//        $perso = 0;
//    }


echo "Le prénom de l'étudiant est : " . "<strong>$perso[1]</strong>" . "<br>";
echo "Le nom de l'étudiant est : " . "<strong>$perso[0]</strong>" . "<br>";
echo "Son âge est : " . "<strong>$perso[2]</strong>" . "<br>";
echo "Lieux de résidences : " . "<strong>$perso[3]</strong>" . "<br>";

foreach ($perso as $item => $val){
    if ($item === "Passions"){
        echo "Passions : ";
        foreach ($val as $pass){
            echo "$pass";
        }
    }
}

echo '<hr>';
?>



<a href="index.php">REVENIR A L'ANCIENNE PAGE</a>
