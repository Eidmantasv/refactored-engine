<?php

$data1 = (object)[
    'cart' => (object)[
        'products' => [
            (object)[
                'id' => 23,
                'title' => 'Duona',
                'price' => 1.23,
                'quantity' => 2,
            ],
            (object)[
                'id' => 43,
                'title' => 'Suris',
                'price' => 3.65,
                'quantity' => 1,
            ],
        ],
    ],
    'customer' => (object)[
        'name' => 'Petras',
        'lastname' => 'Petraitis',
        'email' => 'petras@petraitis.com',
    ],
];
/*
class dataCia {
    private $duomenys;

    public function __constructor($objectData)
{
    $this->duomenys = $objectData;
}
    function paskaiciavimas($duomenys) {
        foreach ($duomenys->cart->products as $value)
        {
            return $value;
        }
    }
}
*/

$a = new CartProducts($data1);
$a->calculateTotal();


class CartProducts
{
    private $products;
    public function __construct($cartProducts)
    {
        $this->products = $cartProducts;
    }

    function calculateTotal()
    {
        $total = 0;
        foreach($this->products->cart->products as $product) {
            $total = $total + ($product->price * $product->quantity);
        }
        echo 'Viso uzsakymas kainuos: ' .  $total;
    }
}