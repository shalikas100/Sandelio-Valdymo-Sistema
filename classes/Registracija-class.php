<?php 
include "/Applications/MAMP/htdocs/Sandelio Valdymo Sistema/utilities/DatabaseManager.php";


class Registracija {

    private  $stulpeliai = array(
            "id"=>"ID",
            "im_kodas"=>"Imones kodas",
            "klientas"=>"Klientas",
            "prisijungimo_vardas"=>"Prisijungimo Vardas",
            "adresas"=>"Adresas",
            "miestas"=>"Miestas",
            "pasto_kodas"=>"Pasto Kodas",
            "telefonas"=>"telefonas",
            "el_pastas"=>"elektroninis",
            "slaptazodis"=>"slaptazodis"
        );
    
    
    public function index() {

        $databaseManager = new DatabaseManager();
        $prisijungimai = $databaseManager->select('prisijungimai');
        return $prisijungimai;

    }

    public function stulpeliai() {
        return $this->stulpeliai;
    }

    public function uzregistruoti_klienta(){

        if(isset($_POST["uzregistruoti_vartotoja"])) {

            session_start();

            $slaptazodis = $_POST['slaptazodis'];
            $slaptazodis_pakartoti = $_POST['pakartoti_slaptazodi'];
            $prisijungimo_vardas = $_POST["prisijungimo_vardas"];
            $sql = "SELECT COUNT(*) FROM prisijungimai WHERE prisijungimo_vardas = $prisijungimo_vardas";

            $databaseManager = new DatabaseManager();
            $prisijungimoSql = $databaseManager->rawQuery($sql);

            if($prisijungimoSql == 1){

                $_SESSION["zinute"] = "Vartotojo vardas negalimas...";
                header("Location: registracija.php");
                exit();
            } else {

                if($slaptazodis != $slaptazodis_pakartoti){

                    $_SESSION["zinute"] = "Slaptažodžiai nesutampa...";
                    header("Location: registracija.php");
                    exit();
               }           
            }

            $data = $_POST; 
            unset($data["uzregistruoti_vartotoja"]);
            unset($data["pakartoti_slaptazodi"]);
           
            $cols = array_keys($data);
            $values = array_values($data);
        
            $databaseManager = new DatabaseManager();
            $databaseManager->insert('prisijungimai', $cols, $values);

            $_SESSION["zinute"] = "Užregistruota. Laukite patvirtinimo nurodytu el. paštu.";
                header("Location: registracija.php");
                exit();
          
           }

    }
}
