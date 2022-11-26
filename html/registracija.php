<?php include ("../Funkcionalumas/DatabaseManager.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
</head>
<body>
    <?php
if(isset($_POST['uzregistruoti_vartotoja'])){
    $dbManager = new DatabaseManager();

    $dbManager->rawQuery("
    INSERT INTO 
    `prisijungimai`
    (`imones_kodas`, `imones_pavadinimas`, `prisijungimo_vardas`, `adresas`, `miestas`, `telefonas`, `elektroninis_pastas`, `slaptazodis`) 
    VALUES ('[$imonesKodas]','[$imonesPavadinimas]','[$prisijungimoVardas]','[$adresas]','[$miestas]','[$telefonas]','[$elPastas]','[$slaptazodis]')");

    $imonesKodas = $_POST['im_kodas'];
    $imonesPavadinimas = $_POST['pavadinimas'];
    $prisijungimoVardas = $_POST['prisijungimo_vardas'];
    $adresas = $_POST['adresas'];
    $miestas = $_POST['miestas'];
    $telefonas = $_POST['telefonas'];
    $elPastas = $_POST['el_pastas'];
    $slaptazodis = $_POST['slaptazodis'];

}
    ?>
    <form action="registracija.php" method="post">
        <input type="text" name="im_kodas" placeholder="Įm. kodas" required>
        <input type="text" name="pavadinimas" placeholder="Įm. pavadinimas" required>
        <input type="text" name="prisijungimo_vardas" placeholder="Prisijungimo vardas">
        <input type="text" name="adresas" placeholder="Adresas" required>
        <input type="text" name="miestas" placeholder="Miestas" required>
        <input type="text" name="telefonas" placeholder="Telefono nr. +370..." required>
        <input type="email" name="el_pastas" placeholder="Elektroninis paštas" required>
        <input type="password" name="slaptazodis" placeholder="Slaptažodis" required>
        <input type="password" name="pakartoti_slaptazodi" placeholder="Pakartokite slaptažodį" required>
        <button type="submit" name="uzregistruoti_vartotoja">Registruotis</button> 
    </form>
    
</body>
</html>