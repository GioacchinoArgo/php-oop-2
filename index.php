<?php
require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Genre.php';
require __DIR__ . '/models/Product.php';

//* Istanze delle Categorie
$food_category = new Category('Cibo');
$toy_category = new Category('Giochi');
$accessory_category = new Category('Accessori');

//* Istanze dei Generi
$dog_genre = new Genre('Cani','<i class="fa-solid fa-dog"></i>');
$cat_genre = new Genre('Gatti', '<i class="fa-solid fa-cat"></i>');
$bird_genre = new Genre('Uccelli', '<i class="fa-solid fa-dove"></i>');
$fish_genre = new Genre('Pesci', '<i class="fa-solid fa-fish"></i>');


//* Istanze dei Prodotti
$product1 = new Product('Royal Canin Mini Adult', 18.99, $dog_genre, $food_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$product2 = new Product('Almo Nature Cat Daily Tin', 4.99, $cat_genre, $food_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$product3 = new Product('Guppy Flake Fish Food', 6.99, $fish_genre, $food_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');
$product4 = new Product('Wooden Wilma Aviary', 119.99, $bird_genre, $accessory_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$product5 = new Product('EasyCrystal Filter Cartridges', 15.99, $fish_genre, $accessory_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
$product6 = new Product('Kong Classic', 12.99, $dog_genre, $toy_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$product7 = new Product('Trixie Plush Mice', 5.99, $cat_genre, $toy_category, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolandia</title>
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center my-5 display-2 text-white">Boolandia</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border border-0 rounded">
                        <img src="<?= $product->image; ?>" class="card-img-top h-100 p-4 zoom">
                        <div class="card-body rounded-bottom text-white">
                            <h4 class="card-title"><?= $product->name; ?></h4>
                            <p class="card-text">Prezzo: €<?= $product->price; ?></p>
                            <p class="card-text">Genere: <?= $product->genre->icon; ?> <?= $product->genre->name; ?></p>
                            <p class="card-text">Categoria: <?= $product->category->name; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>