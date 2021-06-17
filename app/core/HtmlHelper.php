<?php
class HtmlHelper{
    static function mainhtml($html){
        echo $html;
        
    }
    static function formOpen($method='get', $action='', $class=''){
        echo '<form method="'.$method.'" action="'.$action.'" class = "'.$class.'">';
    }

    static function formClose(){
        echo '</form>';
    }

    // static function input($wrapBefore = '', $wrapAfter='', $type='text', $name, $class='', $id='', $placeholder='', $value=''){
    //    echo $wrapBefore;
    //    echo '<input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" value="'.$value.'"/>';
    //    echo $wrapAfter;
    // }
    static function input($type='text', $class='', $id='', $placeholder='', $value=''){
        echo '<input type="'.$type.'" class="'.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" autoforcus required value="'.$value.'"/>';
     }
    static function submit($label, $class=''){
        echo '<button type="submit" class="'.$class.'">'.$label.'</button>';
    }
}