<?php
class Product extends Controller {

    public $data = [],$products = [],$province;
    public function __construct(){
        $this->province = $this->model('ProductModel');
    }

    public function index(){
            
        $this->list_product();
            // $detail = $this->province->getDetailProvince('Hà Nội');
            // echo '<pre>';
            // print_r($detail);
            // echo '</pre>';
            // $data = [
            // 'email' => 'hoangan.web@gmail.com',
            // 'password' => md5('123456'),
            // 'phone' => '01234567',
            // 'fullname' => 'Hoàng An',
            // 'create_at' => date('Y-m-d H:i:s')
            // ];

            // $check = $this->db->table('users')->insert($data);
            // var_dump($check);

            // $id = $this->province->insertUsers($data);
            // echo $id;
            // $data = $this->db->table('province')->get();
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
        // Session::flash('msg', 'Thêm dữ liệu thành công');
        //         $msg = Session::flash('msg');
        //         echo $msg;
    }

    public function list_product(){
        $data = $this->province->getListproduct();
        $this->products['content'] = 'product/listproduct';
        foreach ($data as $key => $value) {
            foreach ($value as $k => $v) {
                $this->products['subcontent']['product'][$key][$k] = $v;
            }
        $this->render('layout/base', $this->products);
    }
}

    // public function addProduct()
    // {
    //     //add product
    //     echo "";

    // }
        public function detail($id=0){
            try {
            $data = $this->province->getDetail($id);
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->products['content'] = 'product/productdetail';
            foreach ($data as $key => $value) {
                foreach ($value as $k => $v) {
                    $this->products['subcontent']['product'][$key][$k] = $v;
                }
            $this->render('layout/base', $this->products);
        }
    }
}