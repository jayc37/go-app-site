<?php
/*Abstract Base Model kế thừa từ class base Database
    - Method:
    1. all() : $this ->all(): hàm lấy tất cả bản ghi
    2. find() : $this->find($id) : hàm tìm và lấy ra 1 bản ghi theo $id.
*/
abstract class Model extends Database {
    protected $db;
    //__construct
    function __construct(){
        $this->db = new Database();
    }
    //abstract tableFill()
    abstract function tableFill();

    //abstract fieldFill()
    abstract function fieldFill();

    //abstract primaryKey()
    abstract function primaryKey();

    //all 
    public function all(){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    //find()
    public function find($id){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        $primaryKey = $this->primaryKey();

        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }

        $sql = "SELECT $fieldSelect FROM $tableName WHERE $primaryKey=$id";
        $query = $this->db->query($sql);
        if (!empty($query)){
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        return false;

    }
}