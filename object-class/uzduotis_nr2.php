<?php

$data = (object)[
    'cart' => (object)[
        'products' => [
            (object)[
                'id' => 23,
                'title' => 'Duona',
                'price' => 1.23,
                'quantity' => 1,
            ],
            (object)[
                'id' => 43,
                'title' => 'Suris',
                'price' => 3.65,
                'quantity' => 1,
            ],
        ],
        'total' => 4.88,
    ],
    'customer' => (object)[
        'name' => 'Petras',
        'lastname' => 'Petraitis',
        'email' => 'petras@petraitis.com',
    ],
];

echo 'klientas: ' . '<br>';
//galima be skliaustų ir kabučių
echo 'vardas: ' . $data->customer->name . '<br>';
echo 'pavarde: ' .  $data->customer->{'lastname'} . '<br>';
echo 'emailas: ' . $data->customer->{'email'} . '<br>';