<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungti</title>
    <link rel="stylesheet" href="../css/login.css"
</head>

<body>
    <div class="container-form">
        <div class="pavadinimas">
            <img src="/Sandelio Valdymo Sistema/html/img/chain.jpg" alt="logo">
        </div>
        <div class="form">
            <form method="" action="index.php">            
                    <label for="name">Vartotojo vardas</label>
                    <input type="text" name="name">              
                    <label for="password">Slaptažodis</label>
                    <input type="password" name="password">             
                    <button type="submit" name="login">Prisijungti</button>
            </form>
            <div class="neregistruotas">
                <a href="neregistruotas_vartotojas.php">Neregistruotas vartotojas</a>
            </div>
            <div class="registracija">
                <a href="registracija.php">Registracija</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer>
            &copy; 2022 Šarūnas Likas
        </footer>
    </div>
    

</body>

</html>