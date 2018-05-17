<?php 

$produktai = [
    [
        'title' => 'Knyga kaip uzdirbti kaip milijona',
        'price' => 4.357,
    ],
    [
        'title' => 'Knyga kaip vinuolis pardave ferrari',
        'price' => 15.842,
    ]
];

echo '<ul>';

foreach ($produktai as $product) {
 echo '<li>' . $product['title'] . ' ' . formatPrice($product['price']) . '</li>';
}
echo '</ul>';

function formatPrice($price)
{
    $ret = round($price, 2);
    return $ret;
}



