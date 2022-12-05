<?php


class DatabaseManager {

    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';

    private $database = 'sandelio_valdymas';

    protected $conn; 


    public function __construct() {
    
        try { 
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->database", 
                $this->user, 
                $this->password,
                //prisijungiant, kad neprarasti LT raidziu.
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            
        } catch (PDOException $e) {
           
            echo "Klaida: " . $e->getMessage();
        }
    }

    public function rawQuery($sql){
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
   
        } catch (PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        } 
    }

    public function select($table) {
        $sql = "SELECT * FROM `$table`";
        try {

            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            return $result;

        } catch (PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }
    }

    public function databaseCount($table) {
        $sql = "SELECT COUNT(*) as Count FROM `$table`";
        try {

            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            //rezultato pasidejimas

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            return $result[0]['Count']; //visas kompanijas kaip asociatyvu masyva

        } catch (PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }
    } 

    public function selectLimit($table, $offset, $limit) {
        //$limit yra kiek rodyti per puslapi
        //$offset yra kiek praleisti irasu nuo pradzios
        $sql = "SELECT * FROM `$table` LIMIT $offset, $limit";
        try {

            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            return $result;

        } catch (PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }

    }

    public function insert($table, $cols, $values) {    

        $cols = implode(',', $cols);
        
        for ($i=0; $i < count($values); $i++) { 
            $values[$i] = "'".$values[$i]."'";
        }
        
        $values = implode(',', $values);

        $sql = "INSERT INTO `$table`($cols) VALUES ($values)";

        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //exec komanda naudojama kai uzklausa negrazina rezulatu
            $this->conn->exec($sql);

            echo "irasas   sekmingai pridetas";
        }
        catch(PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }
    }

    public function delete($table, $col, $id) {
        

        $sql = "DELETE FROM `$table` WHERE $col='$id'";
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec($sql);
        }
        catch(PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }

    }
    public function update($table, $id, $data) {
        //$data - array

        $cols = array_keys($data); // ["vardas", "pavarde", "miestas", "kompanijosID"]
        $values = array_values($data); // ["test", "test", "Kaunas", 5]

        $dataString = [];

        for($i = 0; $i < count($data); $i++) {
            $dataString[] = $cols[$i] . "='" . $values[$i]. "'";
        }
        //implode - masyva pavercia i stringa pagal zenkla

        $sql = "UPDATE `$table` SET $dataString WHERE id='$id'";
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec($sql);
        }
        catch(PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }

    }

    public function __destruct() {
        // 3. Atsijungimas nuo duomenu bazes
        $this->conn = null; //prisijungimas = null,
        //echo "  Atsijungta nuo duomenu bazes";
    }
}