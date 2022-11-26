<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klientai</title>
    <link rel="stylesheet" href="klientai.css">
</head>

<body>
    <div class="pagrindinis">
        <div class="header">
            <h1>KLIENTAI</h1>
            <div class="grizti">
                <form method="GET" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>
        <div class="klientu_paieska">
            <form method="get" action="klientai.php">
                <div class="kodas">
                    <label for="imones_kodas">IEŠKOTI PAGAL ĮM. K.</label>
                    <input type="text" name="imones_kodas">
                    <button type="submit" name="ieskoti_imones">IEŠKOTI</button>
                </div>
                <div class="pavadinimas">
                    <label for="imones_pavadinimas">IEŠKOTI PAGAL ĮM. PAVADINIMĄ</label>
                    <input type="text" name="imones_pavadinimas">
                    <button type="submit" name="ieskoti_imones_pagal_pavadinima">IEŠKOTI</button>
                </div>
                <div class="pastas">
                    <label for="imones_pasto_kodas">IEŠKOTI PAGAL ĮM. PAŠTO K.</label>
                    <input type="text" name="imones_pasto_kodas">
                    <button type="submit" name="ieskoti_imones_pagal_pasto_koda">IEŠKOTI</button>
                </div>
                <div class="telefonas">
                    <label for="imones_telefonas">IEŠKOTI PAGAL ĮM. TELEFONĄ</label>
                    <input type="text" name="imones_telefonas">
                    <button type="submit" name="ieskoti_imones_pagal_telefona">IEŠKOTI</button>
                </div>
                <div class="filtras">
                    <label for="filtruoti_pagal_miesta">FILTRUOTI PAGAL MIESTĄ</label>
                    <select name="imoniu_miestai" id="">
                        <option value="vilnius">Visi</option>
                        <option value="vilnius">Vilnius</option>
                        <option value="vilnius">Kaunas</option>
                        <option value="vilnius">Klaipėda</option>
                        <option value="vilnius">Šiauliai</option>
                        <option value="vilnius">Panevėžys</option>
                    </select>
                    <button type="submit" name="filtruoti_pagal_miesta">FILTRUOTI</button>
                </div>
            </form>
        </div>
        <!-- dar reikia padaryti galimybe prideti nauja klienta ir toje pacioje formoje po kliento paieskos
        redaguoti kliento duomenis.
        forma turi buti desineje "klientu paieska" -->

        <div class="klientu_lentele">
            <table>
                <tr>
                    <th>Eil. Nr.</th>
                    <th>Klientas</th>
                    <th>Įmonės kodas</th>
                    <th>Gatvės adresas</th>
                    <th>Miestas</th>
                    <th>Pašto kodas</th>
                    <th>Telefono nr.</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>UAB Klientas nezinomas</td>
                    <td>123456789</td>
                    <td>Dariaus ir Gireno g. 17</td>
                    <td>Klaipėda</td>
                    <td>12434</td>
                    <td>+37066666666</td>
                </tr>
                
            </table>
        </div>

</body>

</html>