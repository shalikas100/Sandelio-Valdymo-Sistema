<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archyvas</title>
    <link rel="stylesheet" href="../css/archyvas.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>ARCHYVAS</h1>
            <div class="grizti">
                <form method="GET" action="index.php">
                    <button type="submit" name="grizti">GRĮŽTI</button>
                </form>
            </div>
        </div>

        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#">PREKIŲ PARDAVIMAS</a></li>
                    <li><a href="#">PREKIŲ PAJAMAVIMAS</a></li>
                    <li><a href="#">PREKIŲ INVENTORIZAVIMAS</a></li>
                </ul>
            </nav>
        </div>
        <!-- paspaudus ant prekiu archyvo meniu turi atsirasti lenteles, su duomenimis. atsidarius siam psl.
        jis bus tuscias, matysis tik navbaras -->
        <div class="lenteles">
            <div class="pardavimu_archyvas">
                <table>
                    <tr>
                        <th>DATA</th>
                        <th>KLIENTAS</th>
                        <th>PARDAVIMO ID.</th>
                        <th>PRISTATYMO BŪDAS</th>
                        <th>PERŽIŪRĖTI</th>
                    </tr>
                    <tr>
                        <td>2022 11 05</td>
                        <td>UAB Kazkoks klientas</td>
                        <td>007682</td>
                        <td>Išvežta</td>
                        <td><a href="#">Peržiūrėti</a></td>
                    </tr>
                </table>
            </div>
            <div class="pajamavimu_archyvas">
                <table>
                    <tr>
                        <th>DATA</th>
                        <th>TIEKĖJAS</th>
                        <th>PAJAMAVIMO ID.</th>
                        <th>PERŽIŪRĖTI</th>
                    </tr>
                    <tr>
                        <td>2022 10 05</td>
                        <td>UAB Tiekejas</td>
                        <td>007682</td>
                        <td><a href="#">Peržiūrėti</a></td>
                    </tr>
                </table>
            </div>
            <div class="inventorizacijos_archyvas">
                <table>
                    <tr>
                        <th>DATA</th>
                        <th>PERŽIŪRĖTI</th>
                    </tr>
                    <tr>
                        <td>2022 11 05</td>
                        <td><a href="#">Peržiūrėti</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>