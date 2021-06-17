<?php
/* Class Database
    - Hàm database cơ sở để các lớp model khác kế thừa.
    - Method:
        1 __construct: Ham khoi tao cua class, thực hiện khởi tạo kết nối đến mySQL thông qua clas Connection.
        2 insertData : $this->insertData($tableName, $data) : Hàm thêm vào database dữ liệu mới.
        3 updateData : $this->updateData($tableName, $data, $whereUpdate): Hàm cập nhật dữ liệu phía database.
        3 deleteData : $this->deleteData($tableName, $whereDelete) : Hàm xóa dữ liệu phía database.
        4 query      : $this->db->query($sql): Hàm thực thi lệnh phía db.
*/
class Database{
    private $__conn;

    use QueryBuilder;

    //ket noi database
    public function __construct() {
        // goi bien $db_config trong configs/database
        global $db_config;
        //khoi tao 1 ket noi moi thong qua class connection
        $this->__conn = Connection::getInstance($db_config);
    }
    //insertData
    function insertData($table, $data){
        if (!empty($data)){
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key=>$value){
                $fieldStr.=$key.',';
                $valueStr.="'".$value."',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table($fieldStr) VALUES ($valueStr)";

            $status = $this->query($sql);

            if ($status){
                return true;
            }
        }

        return false;
    }

    //updateData  
    function updateData($table, $data, $condition=''){

        if (!empty($data)){
            $updateStr = '';
            foreach ($data as $key=>$value){
                $updateStr.="$key='$value',";
            }

            $updateStr = rtrim($updateStr, ',');

            if (!empty($condition)){
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            }else{
                $sql = "UPDATE $table SET $updateStr";
            }

            $status = $this->query($sql);

            if ($status){
                return true;
            }
        }

        return false;
    }

    //deleteData
    function deleteData($table, $condition=''){

        if (!empty($condition)){
            $sql = 'DELETE FROM '.$table.' WHERE '.$condition;
        }else{
            $sql = 'DELETE FROM '.$table;
        }

        $status = $this->query($sql);

        if ($status){
            return true;
        }

        return false;
    }

    //query
    public function query($sql){
        try{
            $statement = $this->__conn->prepare($sql);

            $statement->execute();

            return $statement;
        }catch (Exception $exception){
            $mess = $exception->getMessage();
            $data['message'] = $mess;
            App::$app->loadError('database', $data);
            die();
        }
    }
}