<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siuntu skaiciuokle</title>
    <link rel="stylesheet" href="../css/siuntu_skaiciuokle.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>SIUNTŲ SKAIČIUOKLĖ</h1>
            <div class="grizti">
                <form method="GET" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>
        <div class="skaiciavimai">
            <div class="formos_dvi">
                <div class="skaiciuokle">
                    <div class="skaiciuokles_pavadinimas">
                        <h3>SKAIČIUOKLĖ</h3>
                    </div>
                    <div class="skaiciuokles_veiksmai">
                        <form method="get" action="siuntu_skaiciuokle.php">
                            <label for="siuntos_svoris">SIUNTOS SVORIS (KG)</label>
                            <input type="text" name="siuntos_svoris">
                            <!-- siuntos kaina 2 eur + kg x 0,1 eur -->
                            <button type="submit" name="skaiciuoti">SKAIČIUOTI</button>
                            <button type="submit" name="isvalyti_pasirinkimus">IŠVALYTI</button>
                        </form>
                            <p>FIKSUOTAS MOKESTIS 2 EUR.</p>
                            <!-- cia pasirodo kaina. -->
                            <p>SIUNTOS KAINA:</p>
                        
                    </div>
                </div>
                <div class="prekes_info">
                    <div class="prekes_pavadinimas">
                        <h3>PREKIŲ PAIEŠKA</h3>
                    </div>
                    <div class="prekiu_paieska">
                        <form method="get" action="siuntu_skaiciuokle.php">
                            <label for="prekes_kodas">PREKĖS KODAS</label>
                            <input type="text" name="prekes_kodas">
                            <button type="submit" name="ieskoti_pagal_koda">IEŠKOTI</button>
                            <label for="prekes_pavadinimas">PREKĖS PAVADINIMAS</label>
                            <input type="text" name="prekes_pavadinimas">
                            <button type="submit" name="ieskoti_pagal_pavadinima">IEŠKOTI</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="prekes">
                <div class="lenteles_pavadinimas">
                    <h3>PREKĖS</h3>
                </div>
                <div class="prekiu_lentele">
                    <table>
                        <tr>
                            <th>KODAS</th>
                            <th>PAVADINIMAS</th>
                            <th>SVORIS</th>
                            <th>PASIRINKIMAS</th>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>Kazkokios prekes pavadinimas</td>
                            <td>0,4</td>
                            <td>
                                <form method="get" action="siuntu_skaiciuokle.php">
                                    <input type="checkbox" name="pasirinkti_preke">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>Kazkokios prekes pavadinimas</td>
                            <td>0,4</td>
                            <td>
                                <form method="get" action="siuntu_skaiciuokle.php">
                                    <input type="checkbox" name="pasirinkti_preke">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>Kazkokios prekes pavadinimas</td>
                            <td>0,4</td>
                            <td>
                                <form method="get" action="siuntu_skaiciuokle.php">
                                    <input type="checkbox" name="pasirinkti_preke">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>Kazkokios prekes pavadinimas</td>
                            <td>0,4</td>
                            <td>
                                <form method="get" action="siuntu_skaiciuokle.php">
                                    <input type="checkbox" name="pasirinkti_preke">
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>