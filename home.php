<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue chez En faim !</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php include('header.php'); ?> <!-- inclusion de l'entête -->

        <div id="corps">
            <h1>Réservation</h1>
            
            <form method="post" action="reservation.php"> <!-- Formulaire de reservation -->
                
                <p><label for="nom">Comment vous appelez-vous ? : </label><input type="text" name="nom" placeholder="Jean Dupond" id="nom"></p>
                
                <p><label for="mail">Votre mail : </label><input type="email" name="mail" placeholder ="exemple@exemple.fr" id="mail"></p>
                
                <p><label for="couverts">Nombre de couverts : </label><input type="number" name="couverts" id="couverts" min="1" max="12"></p>
                
                <p><label for="jour">Choisissez le jour : </label><input type="date" name="jour" id="jour" min="2022-09-21" max="2024-01-01"></p>

                <p><label for ="heure">Choisissez l'heure : </label><input type="time" name="heure" id="heure" min="18:00" max="22:00"></p>
            
                <p><input type="submit" value="Réserver !"></p>
            </form>


        </div>

        <?php include('footer.php'); ?> <!-- inclusion du pied de page -->
    </body>
</html>