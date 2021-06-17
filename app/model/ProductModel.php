<?php
class ProductModel extends Model{
    function tableFill(){
        return 'posts';
     }
 
     function fieldFill(){
         return '*';
     }
 
     function primaryKey(){
         return 'id';
     }
 
    public function getListproduct(){
        try {

            $data = $this->db->table('posts')->select('id,post_author,post_date_gmt,post_date,post_content,post_title,post_excerpt,post_status,post_name,post_modified,post_type')->where('post_author','=', 2)->get();
        return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function getDetail($id){
        try {
            $data = $this->db->table('posts')->where('post_author','=', 2)->where('id','=',$id)->get();
        return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
