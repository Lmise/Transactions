<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    use App\Supplier;
    use App\Order;
    use App\Http\Resources\SupplierResource;

    public function store(Request $request, Supplier $supplier)
    {
      $supplier = Supplier::firstOrCreate(
        [
          'supplier_id' => $request->supplier->id,
          'delivery_date' => $request->delivery_date,
          'delivery_id'=>$order->delivery_id
        ]
              );

      return new ProductResource($supplier);
    }
}
