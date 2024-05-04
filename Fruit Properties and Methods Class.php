<?php
class Fruit {
    // Properties
    public $name;
    public $color;
    public $weight;

    // Constructor to initialize the Fruit object
    function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // Method to get fruit details
    function get_details() {
        return "Name: " . $this->name . ", Color: " . $this->color . ", Weight: " . $this->weight . " grams";
    }
}

// Creating fruit objects
$apple = new Fruit("Apple", "Red", 150);
$banana = new Fruit("Banana", "Yellow", 120);
$orange = new Fruit("Orange", "Orange", 130);

// Displaying details of each fruit
echo $apple->get_details() . "<br>";
echo $banana->get_details() . "<br>";
echo $orange->get_details() . "<br>";
?>
