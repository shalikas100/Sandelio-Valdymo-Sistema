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
                <p>Prisijungęs: Šarūnas Likas</p>
                <form method="" action="login.php">
                    <button type="submit" name="atsijungti">Atsijungti</button>
                </form>

            </div>
            <div class="pavadinimas">
                <h2>WAREHOUSE GOODS CHAIN</h2>
            </div>
            <div class="parasykite">
                <a href="zinutes_langas.php">SKAITYTI ŽINUTES</a>
            </div>

        </div>

        <div class="navbar">
            <div class="logo"><img src="/Sandelio Valdymo Sistema/html/img/chain.jpg" alt=""></div>
            <nav>
                <ul>
                    <li><a href="prekiuPardavimas.php">PREKIŲ PARDAVIMAS</a></li>
                    <li><a href="prekiuPajamavimas.php">PREKIŲ PAJAMAVIMAS</a></li>
                    <li><a href="inventorizacija.php">PREKIŲ INVENTORIZAVIMAS</a></li>
                    <li><a href="archyvas.php">ARCHYVAS</a></li>
                </ul>

            </nav>
        </div>
        <div class="main">
            <div class="sidebar">
                <ul>
                    <li><a href="klientai.php">KLIENTAI</a></li>
                    <li><a href="#">UŽSAKYMAI</a></li>
                    <li><a href="#">SIUNTIMAI</a></li>
                    <li><a href="siuntu_skaiciuokle.php">SIUNTŲ KAINŲ SKAIČIUOKLĖ</a></li>
                    <li><a href="#">SANDĖLIO PLANAS</a></li>
                </ul>
            </div>
            <div class="form">
                <div class="visos_formos">
                <div class="ieskoti">
                    <form method="get" action="index.php">
                        <label for="prekes">PREKĖS PAIEŠKA</label>
                        <input type="prekes" name="prekes">
                        <button type="submit" name="ieskoti">IEŠKOTI</button>
                    </form>
                </div>
                <div class="filtruoti">
                    <form method="get" action="index.php">
                        <label for="prekes">PREKIŲ FILTRAVIMAS</label>
                        <input type="prekes" name="prekes">
                        <button type="submit" name="filtruoti">FILTRUOTI</button>
                    </form>
                </div>
                <div class="rikiuoti">
                    <form method="get" action="index.php">
                        <label for="prekes">PREKIŲ RIKIAVIMAS</label>
                        <input type="prekes" name="prekes">
                        <button type="submit" name="rikiuoti">RIKIUOTI</button>
                    </form>
                </div>
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
        </div>
        <footer>
            &copy; 2022 Šarūnas Likas
        </footer>

    </div>
</body>

</html>