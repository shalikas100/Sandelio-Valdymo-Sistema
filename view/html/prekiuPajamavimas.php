<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prekiu pajamavimas</title>
    <link rel="stylesheet" href="../css/prekiuPajamavimas.css">
</head>
<body>
    <body>
        <div class="pagrindinis">
            <div class="header">
                <h1>PREKIŲ PAJAMAVIMAS</h1>
                <div class="grizti">
                    <form method="GET" action="index.php">
                        <button type="submit" name="grizti">GRĮŽTI</button>
                    </form>
                </div>
            </div>
            <div class="pajamavimas_top">
    
                <div class="pajamavimo_duomenys">
                    <form action="#" method="get">
                        <div class="data">
                            <label for="data">DATA</label>
                            <input type="date" name="date" placeholder="TURI UZSIPILDYTI AUTOMATISKAI">
                        </div>
                        <div class="tiekejas">
                            <label for="tiekejas">TIEKĖJAS</label>
                            <input type="text" name="tiekejas">
                        </div>
                        <div class="pajamavimo_numeris">
                            <label for="pajamavimo_id">PAJAMAVIMO ID</label>
                            <input type="text" name="pajamavimo_id">
                        </div>
                        <div class="button">
                            <button type="submit" name="tvirtinti_pajamavima">PATVIRTINTI</button>
                            <button type="submit" name="redaguoti_pajamavima">REDAGUOTI</button>
                        </div>
                    </form>
    
                    <!-- Paspaudus patvirtinti turi atsirasti formoje suvesti duomenys ir forma issivalo.      -->
                    <div class="patvirtintas_pajamavimas">
                        <p>Data $_GET["date"]</p>
                        <p>Tiekėjas $_GET["tiekejas"]</p>
                        <p>Pajamavimo nr. $_GET["pajamavimo_id"]</p>
                    </div>
                </div>
    
    
                <div class="pajamuojamos_prekes">
                    <table>
                        <tr>
                            <th>Eil. Nr.</th>
                            <th>Kodas</th>
                            <th>Pavadinimas</th>
                            <th>Barkodas</th>
                            <th>Kiekis</th>
                            <th>Svoris (kg)</th>
                            <!-- Jei reikes koreguoti, paspaudus "Redaguoti pardavima", atsiras mygtukas
                             "Istrinti", arba bus galima pakeisti "Kiekis". Patvirtinti pakeitimus 
                            apacioje lenteles atsiras mygtukas. -->
                            <th>Redagavimas</th>
                        </tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>Kazkokios prekes pavadinimas</td>
                        <td>726736480010102</td>
                        <!-- jei reikia koreguoti pajamavima, reikia kad paspaudus koreguoti butu galima keisti kieki,
                        tikriausiai turi buti inputas -->
                        <td>4</td>
                        <td>0,4</td>
                        <td>
                            <form method="get" action="prekiuPajamavimas.php">
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
                        <form method="get" action="prekiuPajamavimas.php">
                            <button type="submit" name="tvirtinti_pakeitinus">Tvirtinti pakeitimus</button>
                        </form>
                    </div>
                </div>
    
            </div>
    
            <div class="ieskoti">
    
                <!-- sioje formoje turi buti laukelis, kur reikes ivesti kieki, kuri norime parduoti
                ir paspaudus ivesti automatiskai uzsipildyti klientu uzsakymu lenteleje pirma eilute ir t.t... -->
                <form method="get" action="prekiuPavamavimas.php">
                    <label for="prekes">PREKĖS PAIEŠKA</label>
                    <input type="text" name="prekes">
                    <button type="submit" name="ieskoti">IEŠKOTI</button>
                </form>
                <form action="get" action="prekiuPajamavimas.php">
                    <label for="kiekis">ĮVESKITE KIEKĮ</label>
                    <input type="number" min="0" name="kiekis">
    
                    <!-- isfiltravus, ivedus prekes kieki itraukiame i klieno pirkimu sarasas -->
                    <button type="submit" name="itraukti_preke">ĮTRAUKTI</button>
    
                    <!-- baigus formuoti uzsakyma tvirtiname, issivalo kliento info ir kliento uzsakymo lentele -->
                    <button type="submit" name="tvirtinti_pajamavima">TVIRTINTI</button>
    
                    <!-- prekiu redagavimas aprasytas virsuje, sis veiksmas, jei jo reikia, turi buti atliktas
                    pries tvirtinima. -->
                    <button type="submit" name="redaguoti_pajamavima">REDAGUOTI PAJAMAVIMĄ</button>
                </form>
            </div>

            <div class="nauja_preke">
                <h5>Nauja prekė</h5>
                <form method="get" action="prekiuPajamavimas.php">
                    <label for="kodas">Kodas</label>
                    <input type="text" name="kodas_nauja_preke">
                    <label for="pavadinimas">Pavadinimas</label>
                    <input type="text" name="pavadinimas_nauja_preke">
                    <label for="kiekis">Kiekis</label>
                    <input type="number" name="kiekis_nauja_preke">
                </form>
            </div>
<!-- 
            cia dar reikia naujos formos tuo atveju, jei atvykusi preke dar nebuvo itraukta i prekiu
            duomenu baze. -->
    
            <div class="table">
                <table>
                    <tr>
                        <th>Įtraukti</th>
                        <th>Kodas</th>
                        <th>Barkodas</th>
                        <th>Pavadinimas</th>
                        <th>Likutis</th>
                        <th>Svoris</th>
                        <th>Vnt. dėžėje</th>
                        <th>Tiekėjas</th>
                        <th>Galiojimo laikas</th>
                        <th>Prekės tipai</th>
                        <th>Vieta sandėlyje</th>
                    </tr>
                    <tr>
                        <!-- pardavimuose suvedus koda, paspaudus mygtuka "ieskoti" issifiltruoja reikiama preke, su stulpliu "itraukti",
    jame pazymejus checkboxa, ivedus kieki ir paspaudus mygtuka itraukti, pajamavimo lenteleje
    atsiras ta preke, ieskotu prekiu sarasas vel uzsipildo.  -->
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
                        <td>
                            <form method="GET" action="#">
                                <input type="checkbox" name="checkbox">
                            </form>
                        </td>
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
    
</body>
</html>