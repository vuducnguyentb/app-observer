<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    public function creating(Product $product)
    {
        $product->slug = Str::slug($product->name);
    }

    public function created(Product $product)
    {
        $product->unique_id = 'PR-'.$product->id;
        $product->save();
    }

    public function updated(Product $product)
    {
        //
    }

    public function deleted(Product $product)
    {
        //
    }

    public function restored(Product $product)
    {
        //
    }

    public function forceDeleted(Product $product)
    {
        //
    }
}
