<?php
class AppServiceProvider extends ServiceProvider {
    public function boot(){
        // $dataUser = $this->db->table('users')->where('id', '=', 20)->first();
        $dataUser = $this->db->table('users')->where('user_login','=',Session::data('admin_login'))->get();
        $data['userInfo'] = $dataUser;
        View::share($data);
    }
}