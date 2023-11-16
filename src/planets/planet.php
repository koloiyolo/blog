<?php
class Planet {
    public $name;
    public $order;
    public $moons;
    public $size;
    public $life;
    public $water;
    public $description;


    public function get_life() {
        if ($this->life === true) {
            return "yes";
        } else if ($this->life === false) {
            return "no";
        } else {
            return "possible";
        }
    }

    public function get_water() {
        if ($this->life === true) {
            return "yes";
        } else if ($this->life === false) {
            return "no";
        } else {
            return "possible";
        }
    }

    public function get_image_path() {
        return "data/images/" . strtolower($this->name) . ".webp";
    }
}

function createPlanet($url, $query) {
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $planet = new Planet();
    $planet->name = $data[$query]['name'];
    $planet->order = $data[$query]['order'];
    $planet->moons = $data[$query]['moons'];
    $planet->size = $data[$query]['size'];
    $planet->life = $data[$query]['life'];
    $planet->water = $data[$query]['water'];
    $planet->description = $data[$query]['description'];
    return $planet;
}
?>