<?php
/*
 * Kế thừa từ class Model
 *
 * */
class UserModel extends Model {
    public $usersfield= [],$umetafield= [];
    function tableFill(){
       return 'users';
    }

    function fieldFill(){
        $this->usersfield = [
            'user_login'=>'', //varchar(60)
            'user_pass'=>'', //varchar(255)
            'user_nicename' =>'', //varchar(50)
            'user_email' =>'', //varchar(100)
            'user_url' =>'', //varchar(100)
            'user_registered'=>date('Y/m/d H:i:s'), //datetime
            'user_activation_key' =>'', //varchar(255)
            'user_status' => 1,//int(11)
            'display_name' => '',//varchar(250)
        ];
        // $this->umetafield= [
        //     'umeta_id'=>'', //bigint(20)
        //     'user_id' =>'', //bigint(20)
        //     'meta_key' =>'', //varchar(255)
        //     'meta_value' =>'' //long_text
        // ];
        return $this;
    }
 
    function primaryKey(){
        return 'id'; //bigin(20), auto_increatement
    }

    public function getDetail($id){
        $data = [];
        return $data[$id];
    }

    public function insertUsers($data){
        $this->fieldFill();
        $this->usersfield['user_nicename'] = $data['nickname'];
        $this->usersfield['display_name'] = $data['nickname'];
        $this->usersfield['user_login'] = $data['username'];
        $this->usersfield['user_email'] = $data['email'];
        $this->usersfield['user_pass'] = $data['password'];
        $this->db->table($this->tableFill())->insert($this->usersfield);
        $this->db->table($this->tableFill())->lastId($this->usersfield['user_login']);
        $this->db->resetQuery();
        return $this->usersfield;
    }
    public function getEmail($email){
        //$this->db->table('users')->delete();
        return $this->db->table('users')->select('user_email')->where('$user_email', '=',$email)->get();
        
    }

    public function getUserlogin($user_login){
        //$this->db->table('users')->delete();
        return $this->db->table('users')->select('user_login')->where('$user_login', '=',$user_login)->get();
    }
}