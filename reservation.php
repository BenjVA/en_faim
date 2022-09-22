<?php 
   try
   {
       // Je me connecte à la base de données MySQL
       $bdd = new PDO('mysql:host=localhost;dbname=en_faim;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
   }
   catch(PDOException $e)
   {
       // J'affiche un message d'erreur si besoin
           die('Erreur : '.$e->getMessage());
   }
    
        // Je veux vérifer que les informations soient bien transmises
     
if (
    (!isset($_POST['nom']) || empty($_POST['nom']))
    || (!isset($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['couverts']) || empty($_POST['couverts']))
    || (!isset($_POST['jour']) || empty($_POST['jour']))
    || (!isset($_POST['heure']) || empty($_POST['heure']))
    )
    {
        echo 'Il manque des informations pour valider la réservation.';
    }

$nom = $_POST['nom'];
$mail = $_POST['mail'];
$couverts = $_POST['couverts'];
$jour = $_POST['jour'];
$heure = $_POST['heure'];  


    // Insertion dans ma base de données 

$ajoutReservation = $bdd->prepare('INSERT INTO clients(client_nom, client_mail, client_couverts, client_jour, client_heure) VALUES (:nom, :mail, :couverts, :jour, :heure)');
$ajoutReservation->execute([
    'nom' => $nom,
    'mail' => $mail,
    'couverts' => $couverts,
    'jour' => $jour,
    'heure' => $heure,
]);

$reqCouverts = $bdd->prepare('SELECT client_couverts FROM clients');
$reqCouverts->execute();
$maxCouverts = $reqCouverts->fetchall();
$totalCouverts = array_sum($maxCouverts);
?>