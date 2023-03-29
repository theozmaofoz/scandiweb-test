<?php
class Book {


    public $name;
    public $weight;
    public $id;
    public $price;
    public $type = "BK";
    public $pic = "/pics/bookstore.jpg";

    function set_name($name) {
        $this->name = $name;
    }

    function set_weight($weight) {
        $this->weight = $weight;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_price($price) {
        $this->price = $price;
    }
}
?>