
<?php
/* Class connection
    - Khoi tao ket noi den mySQL su dung design pattern Singleton.
    - f _construct: Ham khoi tao cua class.
    - f getInstance: Khởi tạo connection nếu connection = null.
*/
class Connection{
    private static $instance = null ,$conn = null ;

    private function __construct($config) {
        // ket noi db
        try {
            // khai bao cau hinh dns
            $dns = 'mysql:dbname='.$config['db'].';host=' . $config['host'].';port=' . $config['port'];

            /* cau hinh $option
                - cau hinh utf8
                - cau hinh try catch bat ngoai le khi ket noi bi loi
            */
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8',
                PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
            ];

            //cau lenh ket noi
            $con = new PDO($dns, $config['user'],$config['pass'],$options);
            // return $con;
            self::$conn = $con;
        } catch (Exception $e) {
            $mess = $e->getMessage();
            die($mess);
        }
    }

    public static function getInstance($config)
        // Hàm chính của Singleton.
    {
        if (self::$instance == null){
            //Khởi tạo kết nối mới
            $connection =  new Connection($config);
            self::$instance = self::$conn;

        } 
        return self::$instance;
    }
}
