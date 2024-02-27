<?php

//# Classe Genere

class Genre {
    public $name;
    public $icon;

    //* Costruttore della classe Genre
    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}
