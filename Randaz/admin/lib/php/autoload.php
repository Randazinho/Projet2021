<?php
//page de chargement automatique des classes


function autoload($nom_classe)
{
    if (file_exists('./lib/php/classes/' . $nom_classe . '.class.php')) {
        require './lib/php/classes/' . $nom_classe . '.class.php';
    } else if (file_exists('./admin/lib/php/classes/' . $nom_classe . '.class.php')) {
            require './admin/lib/php/classes/' . $nom_classe . '.class.php';

        }
}

spl_autoload_register('autoload');

//autoload = fonction qui charge kes fichiers classes

//spl_autoload... = fonction prédéfinie qui appelle la fonction d'autoload lors d'une rencontre du mot new
