<?php
$dir = "Spheres";						// Important dans scan.php sert au debut et a la fin pour le json

$monDomaine = "http://www.wse.fr";      // Va servir pour construire un lien court vers la sphère directement

// Pour tinyfilemanager il faut completer le chemin (c'est utilisé dans son config.php)
// Exemple les sphères sont sont visibles ou accessibles sous l'URL http://www.mondomaine.xx/PanoDrone/Spheres
// Alors ont renseigne comme ci-dessous la variable $dir completea cette info
$root_complement = "ExhibMyDrone/PanoDrone";

$keyok = "Azerty001";       // Si votre php est trop ancien l'usage de tinyfilemanager pour gerer l'accès est impossible
                            // vous pourrez néanmoins gerer les point d'interets en appelant l'interface de gestion manuellement de la façon suivante
                            // http://www.mondomaine.xx/PanoDrone/gest.php?k=Azerty001

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'user' => '$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO' //12345
);

//$bddtype = 'mysql';					// Decommente si Mysql
$bddtype = 'sqlite';					// Commente si pas de sqlite
$host = '127.0.0.1';
$db   = 'pano.db';							// Nom de la bdd
$user = 'user';
$pass = 'pasword';
$port = "3306";

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$max_upload_size_bytes = 5000;

// Votre fichier perso de configuration non ecrasé en cas de maj
$config_file = 'inc-config-perso.php';
if (is_readable($config_file)) {
    @include($config_file);
}
?>