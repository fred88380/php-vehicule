<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des véhicules</title>
</head>
<body>
    <h1>Gestion des Véhicules</h1>
   <?php
   error_reporting(E_ALL);
   ini_set('display_errors', '1');
   
    require_once 'Vehicule.php';
    require_once 'Quatre_Roues.php';
    require_once 'Deux_Roues.php';
    require_once 'Voiture.php';
    require_once 'Camion.php';
    ?>
</body>
</html>