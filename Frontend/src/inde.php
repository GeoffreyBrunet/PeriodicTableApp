<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="//db.onlinewebfonts.com/c/06d1b1518a180e5a9cca2c23401ec40a?family=Circular+Std+Bold" rel="stylesheet" type="text/css"/> 
        <link href="//db.onlinewebfonts.com/c/809eb889c78777517a6d252fd1f76eac?family=Circular+Air+Light" rel="stylesheet" type="text/css"/> 
        <title>Periodic table of elements</title>
    </head>

    <body>

        <h1>Periodic table of elements</h1>

        <form name="search_element" method = "post" action="index.php">
            <input type = "text" name = "Atom">
            <input type = "submit" name = "Submit" value = "Search">
        </form>

       <?php
        $choice = $_POST['Atom'];

        try
        {
            $bdd = new PDO('mysql:host=element-db;dbname=physics;charset=utf8', 'root', 'example');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $particle = $bdd->query('SELECT * FROM elements WHERE element_name="'.$choice.'"');
        
        if(mysqli_num_rows($result)) {
            while ($dataparticles = $particle->fetch())
            {
            ?>
                <p>
                Atom : <strong><?php echo $dataparticles['element_name'];?></strong><br>
                Atomic number : <strong><?php echo $dataparticles['atomic_number']?></strong><br>
                Symbol : <strong><?php echo $dataparticles['symbol']?></strong><br>
                Atomic weight : <strong><?php echo $dataparticles['atomic_weight']?></strong><br>
                Family : <strong><?php echo $dataparticles['family']?></strong><br>
                </p>
            <?php
            }
        } else {
            ?>
            Error
            <?php
        }
        $reponse->closeCursor();
       ?>

    </body>
</html>