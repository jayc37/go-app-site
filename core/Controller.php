<?php 
/* class Controller
    - Là lớp xử lý cơ sở của các lớp xử lý con.
    - f model : Khởi tạo model, thông qua class model.
    - f render : Render dữ liệu từ model ra view.
*/
class Controller{
  public function model($model)
  {
      if (file_exists(_DIR_ROOT.'/app/model/'.$model.'.php')) {
            require_once _DIR_ROOT.'/app/model/'.$model.'.php';
            if (class_exists($model)){
              // khởi tạo model thông qua lớp model.
                $model = new $model();
                return $model;
            } 
      }
      return false;
  }
  // public function render($view, $data=[])
  // // render dữ liệu từ model ra view
  // {
  //   extract($data);
  //   if (file_exists(_DIR_ROOT.'/app/view/'.$view.'.php')) {
  //     require_once _DIR_ROOT.'/app/view/'.$view.'.php';
  //     if (class_exists($view)){
  //         $view = new $view();
  //         return $view;
  //       } 
  // }
  // return false;
  // }
  public function render($view, $data=[]){
    if (!empty(View::$dataShare)){
        $data = array_merge($data, View::$dataShare);
    }

    extract($data);

    $contentView = null;

    if (preg_match('~^layout~', $view)){

        if (file_exists(_DIR_ROOT.'/app/view/'.$view.'.php')){
            require_once _DIR_ROOT.'/app/view/'.$view.'.php';
        }

    }else{
        if (file_exists(_DIR_ROOT.'/app/view/'.$view.'.php')){
            $contentView = file_get_contents(_DIR_ROOT.'/app/view/'.$view.'.php');
        }

        $template =  new Template();
        $template->run($contentView, $data);
    }

}
}