<?php 
include ("/Applications/MAMP/htdocs/Sandelio Valdymo Sistema/utilities/DatabaseManager.php");

class Klientai {

    private  $klientuStulpeliai = array(
        "id"=>"id",
        "im_kodas"=>"Įmonės kodas",
        "klientas"=>"Klientas",
        "adresas"=>"Adresas",
        "miestas"=>"Miestas",
        "pasto_kodas"=>"Pašto kodas",
        "telefonas"=>"Telefonas",
        "el_pastas"=>"El. paštas"
    );

    public function index() {

        $databaseManager = new DatabaseManager();
        $klientai = $databaseManager->select('klientai');
        return $klientai;

    }

    public function klientuStulpeliai() {
        return $this->klientuStulpeliai;
    }
    
    public function prideti_klienta(){

        if(isset($_POST["naujas_klientas"])) {
            $data = $_POST; 
            unset($data["naujas_klientas"]);
            unset($data["id"]);
           
            $klientuStulpeliai = array_keys($data);
            $values = array_values($data);
        
            $databaseManager = new DatabaseManager();
            $databaseManager->insert('klientai', $klientuStulpeliai, $values);
        
            header("Location: klientai.php");
            exit();
           }

    }

    public function trinti_klienta(){

        if(isset($_GET["trinti_klienta"])){
          
            $databaseManager = new DatabaseManager();
            $databaseManager->delete('klientai', 'id', $_GET['trinti_klienta']);
           
           header ("Location: klientai.php");
           exit();
        }



    }

    public function redaguoti_klienta(){

        if(isset($_GET['redaguoti_klienta'])){

                if(isset($_GET['redaguoti_pasirinkta_klienta'])){

                $databaseManager = new DatabaseManager();
                $databaseManager->update('klientai',$klientuStulpeliai, $values);

        }
   
    }
    }


}