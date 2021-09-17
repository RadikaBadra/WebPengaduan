<?php
class Database {
    private $host = DB_HOST;
    private $name = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db;
    private $stmt;

    public function __construct(){
        $dsn = "mysql:host=".$this->host.";dbname=".$this->name;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try{
            $this->db = new PDO($dsn, $this->user, $this->pass, $options);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function query($query){  
    
        $this->db->beginTransaction(); 
        $this->stmt = $this->db->prepare($query);
        try{  
            $this->db->commit();
        }
        catch(PDOException $e){
            $this->db->rollback();
            die($e->getMessage());
        }
    }
    public function bind($param , $value , $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOLEAN;
                break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param ,$value ,$type);
    }
    public function execute(){
        $this->stmt->execute();
    }
    public function ResultSet(){
        $this->execute();
        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    public function Single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function RowCount(){
        return $this->stmt->rowCount();
    }

}
?>