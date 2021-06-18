<?php
class Home extends Controller{

    public $province, $data;

    public function __construct(){
        $this->province = $this->model('HomeModel');
    }

    public function index(){
        $this->get_user();
    }

    public function get_user(){
        $response = new Response();
        $response->redirect('san-pham');
    }
}