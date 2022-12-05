<?php include "/Applications/MAMP/htdocs/Sandelio Valdymo Sistema/classes/Registracija-class.php" ?>
<?php $registracijaObjektas = new Registracija(); ?>
<?php $registracijaObjektas->uzregistruoti_klienta(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registracija.css">
    <title>Registracija</title>
</head>
<body>

    <div class="session">

             <?php if(isset($_SESSION["zinute"])) { ?>
                  <p><?php echo $_SESSION["zinute"]; ?></p>
             </div>
                <?php 
                           unset($_SESSION["zinute"]); 
               ?>
                 <?php } ?>

    </div>

<div class="container">


    

    <div class="registracija">
        <h1>Registracija</h1>
    </div>
    <div class="form">
    <form action="registracija.php" method="post">
        <input type="text" name="im_kodas" placeholder="Įm. kodas" >
        <input type="text" name="klientas" placeholder="Klientas" >
        <input type="text" name="prisijungimo_vardas" placeholder="Prisijungimo vardas">
        <input type="text" name="adresas" placeholder="Adresas" >
        <input type="text" name="miestas" placeholder="Miestas" >
        <input type="text" name="pasto_kodas" placeholder="Pašto kodas" >
        <input type="phone" name="telefonas" placeholder="Telefono nr. +370..." >
        <input type="email" name="el_pastas" placeholder="Elektroninis paštas" >
        <input type="password" name="slaptazodis" placeholder="Slaptažodis" required>
        <input type="password" name="pakartoti_slaptazodi" placeholder="Pakartokite slaptažodį" required>
        <input type="submit" name="uzregistruoti_vartotoja" value="Registruotis"> 
    </form>
    </div>


</div>
   
    
</body>
</html>