<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prekiu pardavimas</title>
    <link rel="stylesheet" href="prekiuPardavimas.css">
</head>

<body>
    <div class="pagrindinis">
        <h1>PREKIŲ PARDAVIMAS</h1>

        <div class="pard_top">

            <div class="kliento_duomenys">

                <form action="prekiuPardavimas.php" method="get">
                    <div class="data">
                        <label for="data">DATA</label>
                        <input type="date" name="date">
                    </div>
                    <div class="klientas">
                        <label for="klientas">KLIENTAS</label>
                        <input type="text" name="klientas">
                    </div>
                    <div class="imones_kodas">
                        <label for="klientas">ĮM. K.</label>
                        <input type="text" name="imones_kodas">
                    </div>
                    <div class="gatve">
                        <label for="gatve">GATVĖS ADRESAS</label>
                        <input type="text" name="gatve">
                    </div>
                    <div class="miestas">
                        <label for="miestas">MIESTAS</label>
                        <input type="text" name="miestas">
                    </div>
                    <div class="pasto_k">
                        <label for="pasto_k">PAŠTO KODAS</label>
                        <input type="text" name="pasto_k">
                    </div>
                    <div class="telefonas">
                        <label for="telefonas">TELEFONO NR.</label>
                        <input type="text" name="telefonas">
                    </div>
                    <div class="button">
                        <button type="submit" name="tvirtinti_klienta">PATVIRTINTI</button>
                        <button type="submit" name="redaguoti_klienta">REDAGUOTI</button>
                    </div>
                </form>
                
                <?php if(isset($_GET["tvirtinti_klienta"])){ ?>

                <div class="patvirtintas_klientas">
                    <p> <?php echo $_GET["date"] ?></p>
                    <p><?php echo $_GET["klientas"] ?></p>
                    <p><?php echo $_GET["imones_kodas"] ?></p>
                    <p><?php echo $_GET["gatve"] ?></p>
                    <p><?php echo $_GET["miestas"] ?></p>
                    <p><?php echo $_GET["pasto_k"] ?></p>
                    <p><?php echo $_GET["telefonas"] ?></p>
                </div>
            </div>
        <?php } ?>

            <div class="kliento_uzsakymas">
                <table>
                    <tr>
                        <th>Eil. Nr.</th>
                        <th>Kodas</th>
                        <th>Pavadinimas</th>
                        <th>Barkodas</th>
                        <th>Kiekis</th>
                        <th>Svoris (kg)</th>
                        <!-- Jei reikes koreguoti, paspaudus "Redaguoti pardavima", atsiras mygtukas
                         "Istrinti", arba bus galima pakeisti "Kiekis". Kaip patvirtinti 
                         pakeitimus, dar besugalvojau -->
                        <th>Redagavimas</th>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="#">
                            <button type="submit" name="istrinti">Ištrinti</button>
                            </form>
                        </td>
                    </tr>    
                </table>
                <div class="tvirtinti_pakeitimus">
                <form method="get" action="#">
                    <button type="submit" name="tvirtinti_pakeitinus">Tvirtinti pakeitimus</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="ieskoti">
            <!-- sioje formoje turi buti laukelis, kur reikes ivesti kieki, kuri norime parduoti
            ir paspaudus ivesti automatiskai uzsipildyti klientu uzsakymu lenteleje pirma eilute ir t.t... -->
            <form method="get" action="prekiuPardavimas.html">
                <label for="prekes">PREKĖS PAIEŠKA</label>
                <input type="text" name="prekes">
                <button type="submit" name="ieskoti">IEŠKOTI</button>
            </form>
            <form action="get" action="prekiuPardavimas.html">
                <label for="kiekis">ĮVESKITE KIEKĮ</label>
                <input type="number" min="0" name="kiekis">
                <button type="submit" name="itraukti_preke">ĮTRAUKTI</button>
                <button type="submit" name="tvirtinti_pardavima">TVIRTINTI</button>
                <button type="submit" name="redaguoti_pardavima">REDAGUOTI PARDAVIMĄ</button>
            </form>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>KODAS</th>
                    <th>BARKODAS</th>
                    <th>PAVADINIMAS</th>
                    <th>LIKUTIS</th>
                    <th>SVORIS</th>
                    <th>VNT. DĖŽĖJE</th>
                    <th>GAMINTOJAS</th>
                    <th>GALIOJIMO LAIKAS</th>
                    <th>PREKĖS TIPAS</th>
                    <th>VIETA SANDĖLYJE</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
                <tr>
                    <td>1010</td>
                    <td>726736480010102</td>
                    <td>Preke</td>
                    <td>78</td>
                    <td>0,3 kg</td>
                    <td>6</td>
                    <td>KazKas</td>
                    <td>2024 01 01</td>
                    <td>Mediena</td>
                    <td>A/11/1</th>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>