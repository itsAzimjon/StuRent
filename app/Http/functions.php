<?php
function lang($json,$lang){
    // return $lang;
    $ar=json_decode($json);
    if(!empty($ar->$lang))
        return $ar->$lang;
    return "bu tilda mavjut emas";
}