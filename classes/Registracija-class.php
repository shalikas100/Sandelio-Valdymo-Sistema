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

            // reikia tikrinti ar slaptazodis ir pakartotinas slaptazodis 
            // sutampa ir ar db neegzistuoja toks vartotojas su tokiu paciu prisijungimo vardu


            $data = $_POST; 
            unset($data["uzregistruoti_vartotoja"]);
            unset($data["pakartoti_slaptazodi"]);
           
            $cols = array_keys($data);
            $values = array_values($data);
        

            $databaseManager = new DatabaseManager();
            $databaseManager->insert('prisijungimai', $cols, $values);
        
            header("Location: registracija.php");
            exit();
           }

    }
}
