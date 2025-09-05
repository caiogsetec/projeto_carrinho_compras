<?php

require_once './src/Product.php';
require_once './src/Cart.php';

$products = [
    new Product(1, "Camisa", 59.90, 10),
    new Product(2, "Short Jeans", 129.90, 5),
    new Product(3, "Tênis", 199.90, 3),
];

$cart = new Cart();

echo $cart->addItem($products[0], 2);
echo $cart->addItem($products[2], 10);
$cart->listItems();

echo $cart->removeItem(1);
$cart->listItems();

echo $cart->addItem($products[1], 1);
$cart->listItems();

echo $cart->applyDiscount("DESCONTO10");
echo "Total final: \$" . $cart->calculateTotal() . "\n";


