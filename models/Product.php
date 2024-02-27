<?php

//# Classe Product

class Product {
    public $name;
    public $price;
    public $genre;
    public $category;
    public $image;

    //* Costruttore della classe Product
    public function __construct($name, $price, Genre $genre, Category $category, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->genre = $genre;
        $this->category = $category;
        $this->image = $image;
    }
}
