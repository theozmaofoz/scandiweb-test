<?php
class Furniture {


    public $name;
    public $price;
    public $id;
    public $height;
    public $width;
    public $length;
    public $type = "FR";
    public $pic = "/pics/furnitureshop.jpg";


    function set_name($name) {
        $this->name = $name;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function set_height($height) {
        $this->height = $height;
    }
    
    function set_width($width) {
        $this->width = $width;
    }
    
    function set_length($length) {
        $this->length = $length;
    }

    // function set_dimensions($height, $width, $length) {

    // }
}
?>