<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>

<body>
    <form action="" method="post">
        <h2>Calcul Number</h2>
        <div class="form-group">
            <label for="name">Nombre1</label>
            <input type="text" class="form-control" id="name" name="nombre1"><br><br>
        </div>
        <div class="form-group">
            <label for="name">Nombre2</label>
            <input type="text" class="form-control" id="name" name="nombre2"><br><br>
        </div>
        <input type="submit" name="submit" value="valider">
    </form>

    <?php
    //le script permetant de calculer la somme des nombres entrer par l'utilisateur

    if (isset($_POST['submit']) && $_POST['submit']) {

        $somme = $_POST['nombre1'] + $_POST['nombre2'];
        echo "la somme est: " . $somme;
    }

    ?>

</body>

</html>