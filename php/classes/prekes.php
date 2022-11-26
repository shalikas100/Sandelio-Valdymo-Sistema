<?php 
include "../utilities/DatabaseManager.php";

class Produktai {

    private $cols = array(
        "Kodas" => "KODAS",
        "Likutis" => "LIKUTIS",
        "Pavadinimas" => "PAVADINIMAS",
        "Tipas" => "TIPAS",
        "Gamintojas" => "GAMINTOJAS"
    );
    
    public function index() {

        $databaseManager = new DatabaseManager();
        $produktai = $databaseManager->select('LM_likuciai');
        return $produktai;

    }

    public function cols() {
        return $this->cols;
    }

    public function filter() {
        echo "Prekes isfiltruotos atejo is klases";
    }

}

$data = new Produktai();