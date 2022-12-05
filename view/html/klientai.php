<?php include ("/Applications/MAMP/htdocs/Sandelio Valdymo Sistema/classes/Klientai-class.php") ?>

<?php $klientaiObjektas = new Klientai(); ?>
<?php $klientaiObjektas->prideti_klienta(); ?>
<?php $klientai = $klientaiObjektas->index(); ?>
<?php $cols = $klientaiObjektas->klientuStulpeliai(); ?>
<?php $klientaiObjektas->trinti_klienta(); ?>
<?php $klientaiObjektas->redaguoti_klienta(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klientai</title>
    <link rel="stylesheet" href="../css/klientai.css">
</head>

<body>
    <div class="pagrindinis">
        <div class="header">
            <h1>Klientai</h1>
            <div class="grizti">
                <form method="GET" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>
        <div class="klientu_paieska">
            <h4>Kliento paieška</h4>
            <form method="GET" action="klientai.php">
                <div class="kodas">
                    <label for="imones_kodas">Ieškoti pagal įm. k.</label>
                    <input type="text" name="imones_kodas">
                    <button type="submit" name="ieskoti_imones">Ieškoti</button>
                </div>
                <div class="pavadinimas">
                    <label for="imones_pavadinimas">Ieškoti pagal įm. pavadinimą</label>
                    <input type="text" name="imones_pavadinimas">
                    <button type="submit" name="ieskoti_imones_pagal_pavadinima">Ieškoti</button>
                </div>
                <div class="filtras">
                    <label for="filtruoti_pagal_miesta">Filtruoti pagal miestą</label>
                    <select name="imoniu_miestai" id="">
                        <option value="visi">Visi</option>
                        <option value="vilnius">Vilnius</option>
                        <option value="kaunas">Kaunas</option>
                        <option value="klaipeda">Klaipėda</option>
                        <option value="siauliai">Šiauliai</option>
                        <option value="panevezys">Panevėžys</option>
                    </select>
                    <button type="submit" name="filtruoti_pagal_miesta">Filtruoti</button>
                </div>
            </form>
            <a href="klientai.php">Valyti filtrą</a>
        </div>
        <div class="prideti_klienta">
                <h4>Pridėti naują klientą</h4>

            <form method="post" action="klientai.php">

                Įmonės kodas <input type="number" maxlenght="11" name="im_kodas" required>
                Klientas <input type="text" name="klientas" required>
                Adresas <input type="text" name="adresas" required>
                Miestas <input type="text" name="miestas" required>
                Pašto kodas <input type="number" name="pasto_kodas" required>
                Telefonas <input type="text" name="telefonas" required>
                El. paštas <input type="mail" name="el_pastas" required>

            <button type="submit" name="naujas_klientas">Įrašyti</button>

            </form>

        </div>

        <div class="klientu_lentele">
            <table>
                <tr>
                    <?php foreach($cols as $col) { ?>
                        <th><?php echo $col; ?></th>
                    <?php } ?>

                    <th>Ištrinti/Redaguoti</th>
                </tr>

                <?php foreach($klientai as $klientas){ ?>
                    <tr>
                        <?php foreach($cols as $key=>$col){ ?>
                                <td> <?php echo $klientas[$key] ?></td>
                        <?php } ?>
                            <td>
   
                        <form method="GET" action="klientai.php">
                            <button type="sumbim" name="trinti_klienta" value="<?php echo $klientas["id"];?>">Ištrinti</button>
                        </form>
                        
                        <form method="GET" action="klientai.php">
                            <button type="sumbim" name="redaguoti_klienta" value="<?php echo $klientas["id"];?>">Redaguoti</button>
                        </form>
                        
                            </td>
                    </tr>
                <?php } ?> 

            </table>
        </div>

        <div class="redagavimas">
            
        <form method="GET" action="klientai.php">
        
            ID <input type="number" maxlenght="11" name="im_kodas" value="<?php echo $klientas["id"];?>" required>
            Įmonės kodas <input type="number" maxlenght="11" name="im_kodas" value="<?php echo $klientas["im_kodas"];?>" required>
            Klientas <input type="text" name="klientas" value="<?php echo $klientas["klientas"];?>" required>
            Adresas <input type="text" name="adresas" value="<?php echo $klientas["adresas"];?>" required>
            Miestas <input type="text" name="miestas" value="<?php echo $klientas["miestas"];?>" required>
            Pašto kodas <input type="number" name="pasto_kodas" value="<?php echo $klientas["pasto_kodas"];?>" required>
            Telefonas <input type="text" name="telefonas" value="<?php echo $klientas["telefonas"];?>" required>
            El. paštas <input type="mail" name="el_pastas" value="<?php echo $klientas["el_pastas"];?>" required>

        <button type="submit" name="redaguoti_pasirinkta_klienta">Redaguoti</button>

            </form>
            
    </div>
</body>

</html>