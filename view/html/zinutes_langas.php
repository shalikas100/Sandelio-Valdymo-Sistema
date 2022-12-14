<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žinutės langas</title>
    <link rel="stylesheet" href="../css/zinutes_langas.css">
</head>

<body>
    <div class="container">
        <div class="form">
            
            <form method="post" action="index.php">
                <h3>Parašykite mums</h3>
                <div class="vardas">
                    <input type="text" name="name" placeholder="Vardas">
                </div>
                <div class="telefonas">
                    <input type="text" name="telefonas" placeholder="Telefono nr.">
                </div>
                <div class="pastas">
                    <input type="email" name="pastas" placeholder="Elektroninis paštas">
                </div>
                <div class="zinute">
                    <textarea name="zinute" id="zinute" cols="30" rows="10" placeholder="Žinutė"></textarea>
                </div>
                <div class="button">
                    <div class="siusti">
                    <button type="submit" name="siusti">Siųsti</button>
                    </div>
                    <div class="gristi">
                        <!-- svecias parases zinute ir paspaudes gristi but nukreipiamas i admin o ne i 
                        neregistruoto vartotojo psl.!!!!! -->
                    <button><a href="index.php">Grįžti</a></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="session">
            <h5>Zinute issiusta sekmingai</h5>
        <!-- cia tures atsirasti zinute (session), kad zinute sekmingai issiusta, tada vartotojas,
            nukreipiamas i psl. kuriame paspaude "Parasykite mums" arba neissiusta,
        neissiuntimo salyga,  (telefonas && pastas) neivesti kontaktiniai duomenys -->
        </div>
    </div>
    <div class="footer">
        <footer>
            &copy; 2022 Šarūnas Likas
        </footer>
    </div>
</body>

</html>