<?php
class User extends Controller{

    public $province, $data;

    public function __construct(){
        $this->province = $this->model('UserModel');
    }

    public function index(){
        // $this->get_user();
        $this->login();
    }
    public function get_user()
    {
        Session::delete('admin_login');
        $request = new Request();
        if ($request->isPost()){
            /*Set rules*/
            $request->rules([
                'user_login' => 'required|matchdb:users:user_login',
                'user_pass' => 'required|matchdb:users:user_pass',
            ]);
            //Set message
            $request->message([
                'user_login.required' => 'User login không được để trống',
                'user_login.matchdb' => 'User login Không tồn tại',
                'user_pass.required' => 'Mật khẩu không được để trống',
                'user_pass.matchdb' => 'Sai mật khẩu đăng nhập',
            ]);

            $validate = $request->validate();
            $response = new Response();
            if (!$validate){
                Session::flash('msg', 'Sai thông tin đăng nhập');
                Session::flash('errors',$request->errors());
                Session::flash('old',$request->getFields());
                $response->redirect('user/login');

            }else{
                Session::flash('msg', 'Đăng nhập thành công');
                $this->data['subcontent']['msg'] = Session::flash('msg');
                Session::data('admin_login',$request->getFields()['user_login']);
                $response->redirect('home');
            }
        }

    }

    public function login(){
        $this->data['content'] = 'login/signin';
        $this->data['subcontent']['msg'] = Session::flash('msg');
        $this->data['subcontent']['success'] = Session::flash('success');
        $this->data['subcontent']['errors'] = Session::flash('errors');
        $this->data['subcontent']['old'] = Session::flash('old');
        $this->render('layout/basefull', $this->data);
    }

    public function signup(){
        $this->data['content']= 'login/signup';
        $this->data['subcontent']['errors'] = Session::flash('errors');
        $this->data['subcontent']['msg'] = Session::flash('msg');
        $this->data['subcontent']['old'] = Session::flash('old');
        $this->render('layout/basefull',$this->data);

    }
    public function post_user(){
        // $userId = 20;
        $request = new Request();
        if ($request->isPost()){
            /*Set rules*/
            $request->rules([
                'nickname' => 'required|min:5|max:30',
                'username' => 'required|min:6|unique:users:user_login',
                'email' => 'required|email|min:3|unique:users:user_email',
                'password' => 'required|min:6',
                'repeatpassword' => 'required|match:password',
            ]);
            //Set message
            $request->message([
                'nickname.required' => 'Tên gọi không được để trống',
                'nickname.min' => 'Tên gọi phải lớn hơn 5 ký tự',
                'nickname.required' => 'Tên gọi phải nhỏ hơn 30 ký tự',
                'username.required' => 'username đăng nhập không được rỗng',
                'username.unique' => 'username đã tồn tại trong hệ thống',
                'username.min' => 'username đăng nhập phải lớn hơn 6 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 6 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải lớn hơn 6 ký tự',
                'repeatpassword.required' => 'Nhập lại mật khẩu không được để trống',
                'repeatpassword.match' => 'Mật khẩu nhập lại không khớp'
            ]);

            $validate = $request->validate();
            $response = new Response();
            if (!$validate){
                Session::flash('msg', 'Không hợp lệ, vui lòng kiểm tra lại');
                Session::flash('errors',$request->errors());
                Session::flash('old',$request->getFields());
                $response->redirect('user/signup');

            }else{
                Session::flash('old',$this->province->insertUsers($request->getFields()));
                Session::flash('success', 'Tạo tài khoản thành công, vui lòng đăng nhập');
                $response->redirect('user/login');
            }
        }
    }
    // public function validate_email($uemail = '')
    // {
    //     return empty($this->province->getEmail($uemail)) ?false:true;
    // }

    // public function validate_user_login($user_login = '')
    // {
    //     return empty($this->province->getUserlogin($user_login)) ?false:true;

    // }
    public function check_age($age){

        if ($age>=20) return true;
        return false;
    }
}