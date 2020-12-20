<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CardProduct extends Component
{
    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('components.product.card-product');
    }
}
