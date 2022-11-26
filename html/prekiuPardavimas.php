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
        <div class="header">
            <h1>PREKIŲ PARDAVIMAS</h1>
            <div class="gristi">
                <form method="GET" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>
        <div class="pard_top">

            <div class="kliento_duomenys">
                <form action="#" method="get">
                    <div class="data">
                        <label for="data">DATA</label>
                        <input type="date" name="date">
                    </div>
                    <div class="pardavimo_id">
                        <!-- paspaudus ant laukelio turetu susigeneruoti automatiskai, kelintas pardavimas yra 
                        sistemoje, nesvarbu kokiam klientui, turetu dideti po 1. -->
                        <label for="pardavimo_id">PARDAVIMO ID.</label>
                        <input type="pardavimo_id" name="pardavimo_id">
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

                <!-- Paspaudus patvirtinti turi atsirasti formoje suvesti duomenys ir forma issivalo.      -->
                <div class="patvirtintas_klientas">
                    <p>Data $_GET["date"]</p>
                    <p>Pardavimo ID $_GET["pardavimo_id"]</p>
                    <p>Kliento pavadinimas $_GET["klientas"]</p>
                    <p>Įm. k. $_GET["imones_kodas"]</p>
                    <p>Gatvės adresas $_GET["gatve"]</p>
                    <p>Miestas $_GET["miestas"]</p>
                    <p>Pašto kodas $_GET["pasto_k"]</p>
                    <p>Telefono nr. $_GET["telefonas"]</p>
                </div>
            </div>


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
                         "Istrinti", arba bus galima pakeisti "Kiekis". Patvirtinti pakeitimus 
                        apacioje lenteles atsiras mygtukas. -->
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
            <form method="get" action="prekiuPardavimas.php">
                <label for="prekes">PREKĖS PAIEŠKA</label>
                <input type="text" name="prekes">
                <button type="submit" name="ieskoti">IEŠKOTI</button>
            </form>
            <form action="get" action="prekiuPardavimas.php">
                <label for="kiekis">ĮVESKITE KIEKĮ</label>
                <input type="number" min="0" name="kiekis">

                <!-- isfiltravus, ivedus prekes kieki itraukiame i klieno pirkimu sarasas -->
                <button type="submit" name="itraukti_preke">ĮTRAUKTI</button>

                <!-- baigus formuoti uzsakyma tvirtiname, issivalo kliento info ir kliento uzsakymo lentele -->
                <button type="submit" name="tvirtinti_pardavima">TVIRTINTI</button>

                <!-- prekiu redagavimas aprasytas virsuje, sis veiksmas, jei jo reikia, turi buti atliktas
                pries tvirtinima. -->
                <button type="submit" name="redaguoti_pardavima">REDAGUOTI PARDAVIMĄ</button>
            </form>
            <form class="siuntimas" action="#">
                <label for="siuntimo_checkbox">PRISTATYMO BŪDAS</label>
                <select name="pristatymo_budas" id="">
                    <option value="atsiims_vietoje">Atsiims vietoje</option>
                    <option value="vezamos">Išvežti</option>
                    <option value="issiusti">Išsiųsti</option>
                </select>
            </form>
            <!-- pazymejus checkbox kad bus sinciama, turetu pasirodyti uzrasas ir pildant pirkima
            turetu kisti siuntimo kaina, pagal prekiu svorius. -->

            <p class="siuntimo_kaina">PRELIMINARI KAINA:</p>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>ĮTRAUKTI</th>
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
                    <!-- pardavimuose suvedus koda, paspaudus mygtuka "ieskoti" issifiltruoja reikiama preke, su stulpliu "itraukti",
jame pazymejus checkboxa, ivedus kieki ir paspaudus mygtuka itraukti, klientu uzsakymu lenteleje
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

</html>