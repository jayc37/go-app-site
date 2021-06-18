<?php
/*
 * Kế thừa từ class Model
 *
 * */
class HomeModel extends Model {

    function tableFill(){
       return 'province';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

}