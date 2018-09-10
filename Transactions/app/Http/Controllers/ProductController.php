<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    use App\Product;
    use App\Supplier;
    use App\Http\Resources\ProductResource;

    public function store(Request $request, Product $product)
    {
      $product = Product::firstOrCreate(
        [
          'product_id' => $request->product->id,
                ],
        ['supplier_id' => $supplier->supplier_id]
      );

      return new ProductResource($product);
    }
}
