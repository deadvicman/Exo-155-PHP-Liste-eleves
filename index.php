<?php
require "database.php"
?>

<ul class="list">
    <?php
    foreach ($myArray as $key => $value){
        echo "Le prénom de l'étudiant est : " . "<strong>$value[0]</strong>" . "<br>";
        echo "Le nom de l'étudiant est : " . "<strong>$value[1]</strong>" . "<br>";
        echo "Accès aux informations : " . "<strong><a href='infos.php?perso=$key'>ICI</a></strong>" . "<br>";
        echo "<hr>";
    }
    ?>
</ul>
