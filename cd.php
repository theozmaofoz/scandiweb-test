<?php
class CD {


    public $name;
    public $size;
    public $id;
    public $price;
    public $type = "CD";
    public $pic = "/pics/vinyl.jpg";

    function set_name($name) {
        $this->name = $name;
    }

    function set_size($size) {
        $this->size = $size;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function set_id($id) {
        $this->id = $id;
    }
}
?>