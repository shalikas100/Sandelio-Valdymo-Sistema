<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Goods Chain</title>
    <link rel="stylesheet" href="../css/style.css">
</head>




<body>
    <div class="container">
        <div class="top">
            <div class="login">
                <p>Prisijungęs: Registruotas vartotojas</p>
                <!-- turi rodyti prisijungusio zmogaus prisijungimo_vardas -->
                <form method="" action="login.php">
                    <button type="submit" name="atsijungti">Atsijungti</button>
                </form>

            </div>
            <div class="pavadinimas">
                <h2>WAREHOUSE GOODS CHAIN</h2>
            </div>
            <div class="parasykite">
                <a href="zinutes_langas.php">Parašyti žinutę</a>
            </div>

        </div>

        <div class="navbar">
            <div class="logo"><img src="/Sandelio Valdymo Sistema/html/img/chain.jpg" alt=""></div>
            <nav>
                <ul>
                    <li><a href="#">Pirkimas</a></li>
                    <li><a href="#">Užsakymai</a></li>
                    <li><a href="#">Siuntimai</a></li>
                    <li><a href="#">Kliento duomenys</a></li>
                    <li><a href="siuntu_skaiciuokle.php">Siuntų kainų skaičiuoklė</a></li>
                </ul>

            </nav>
        </div>
        <div class="main">
            <div class="form">
                <div class="visos_formos">
                <div class="ieskoti">
                    <form method="get" action="index.php">
                        <label for="prekes">Prekės paieška</label>
                        Pagal kodą <input type="prekes" name="prekes">
                        <button type="submit" name="ieskoti">Ieškoti</button>
                    </form>
                </div>
                <div class="filtruoti">
                    <form method="get" action="index.php">
                        <label for="prekes">Prekių filtravimas</label>
            Pagal tipą <select name="tipas" id="tipas">
                            <option value="visi">Visi</option>
                            <option value="visi">Tepalai</option>
                            <option value="visi">Ginklams</option>
                            <option value="visi">Laivams</option>
                        </select>
            Pagal gamintoją <select name="gamintojas" id="gamintojas">
                            <option value="Visi">Visi</option>
                            <option value="Liqui Moly">Liqui Moly</option>
                            <option value="Sonax">Sonax</option>

                        </select>
                        <button type="submit" name="filtruoti">Filtruoti</button>
                    </form>
                </div>
                <div class="rikiuoti">
                    <form method="get" action="index.php">
                        <label for="prekes">Prekių rikiavimas pagal kodą</label>
                        <select name="rikiuoti" id="rikiuoti">
                            <option value="1-9">1-9</option>
                            <option value="9-1">9-1</option>
                        </select>
                        <button type="submit" name="rikiuoti">Rikiuoti</button>
                    </form>
                    <a href="uzsiregistraves_vartotojas.php">Valyti filtrą</a>
                </div>
            </div>

                <div class="table">
                    <table>
                        <tr>
                            <th>Kodas</th>
                            <th>Barkodas</th>
                            <th>Pavadinimas</th>
                            <th>Lokutis</th>
                            <th>Svoris</th>
                            <th>Vnt. dėžėje</th>
                            <th>Tiekėjas</th>
                            <th>Prekės tipas</th>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>726736480010102</td>
                            <td>Preke</td>
                            <td>78</td>
                            <td>0,3 kg</td>
                            <td>6</td>
                            <td>KazKas</td>
                            <td>Mediena</td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>726736480010102</td>
                            <td>Preke</td>
                            <td>78</td>
                            <td>0,3 kg</td>
                            <td>6</td>
                            <td>KazKas</td>
                            <td>Mediena</td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>726736480010102</td>
                            <td>Preke</td>
                            <td>78</td>
                            <td>0,3 kg</td>
                            <td>6</td>
                            <td>KazKas</td>
                            <td>Mediena</td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>726736480010102</td>
                            <td>Preke</td>
                            <td>78</td>
                            <td>0,3 kg</td>
                            <td>6</td>
                            <td>KazKas</td>
                            <td>Mediena</td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>726736480010102</td>
                            <td>Preke</td>
                            <td>78</td>
                            <td>0,3 kg</td>
                            <td>6</td>
                            <td>KazKas</td>
                            <td>Mediena</td>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
        <footer>
            &copy; 2022 Šarūnas Likas
        </footer>

    </div>
</body>

</html>