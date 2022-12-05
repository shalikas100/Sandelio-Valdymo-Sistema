<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventorizacija</title>
    <link rel="stylesheet" href="../css/inventorizacija.css">
</head>

<body>
    <div class="container">
        <div class="top">
            <div class="pavadinimas">
                <h1>INVENTORIZACIJA</h1>
            </div>
            <div class="button">
                <form method="get" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>
        <div class="main">
            <div class="form">
                <form method="get" action="inventorizacija.php">
                    <div class="data">
                        <label for="data">DATA</label>
                        <input type="date" name="data">
                    </div>
                    <div class="tiekejas">
                        <label for="tiekejas">TIEKĖJAS</label>
                        <select name="tiekejas" id="">
                            <option value="visi">VISI</option>
                            <option value="LIQUI MOLY">LIQUI MOLY</option>
                            <option value="SONAX">SONAX</option>
                        </select>
                    </div>
                    <div class="abu_mygtukai">
                    <div class="form_button">
                        <button type="submit" name="filtruoti">FILTRUOTI</button>
                    </div>
                    <div class="form_button_pateikti">
                        <button type="submit" name="pateikti">PATEIKTI</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>KODAS</th>
                        <th>BARKODAS</th>
                        <th>TIEKĖJAS</th>
                        <th>LIKUTIS</th>
                        <th>LIKUTIS SANDĖLYJE</th>
                        <th>SKIRTUMAS</th>
                        <th>VIETA SANDĖLYJE</th>
                    </tr>
                    <tr>
                        <td>1010</td>
                        <td>3231241241324</td>
                        <td>LIQUI MOLY</td>
                        <td>74</td>
                        <td>
                            <form method="get" action="inventorizacija.php">
                                <input type="number" name="sandelio_likutis" min="0">
                                <button type="submit" name="tvirtinti_likuti">Tvirtinti</button>
                                <button type="submit" name="koreguoti_likuti">Koreguoti</button>
                            </form>
                        </td>
                        <!-- turi buti likutis - likutis sandelyje. skaicius. jei mazai raudonas, 
                        jei daug zalias, jei 0, lieka kaip buve -->
                        <td>0</td>
                        <td>A/11/1</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>