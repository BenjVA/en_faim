<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue chez En faim !</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php include('header.php'); ?>

        <div id="corps">
            <h1>Réservation</h1>
            
            <form action="reservation.php" method="post">
                <p>Votre nom : <input type="text" name="nom" placeholder="Votre nom ici" id="nom"></p>
                <p>Votre mail : <input type="email" name="mail" placeholder ="Votre Email ici" id="mail"></p>
                <p>Nombre de couverts : <input type="number" name="couvert" id="couvert"></p>
                <p><input type="submit" value="Envoyer"></p>
            </form>


        </div>

        <?php include('footer.php'); ?>
    </body>
</html>