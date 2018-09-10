<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   use App\Order;
   use App\Http\Resources\OrderResource;

    public function index()
    {
      return OrderResource::collection(Order::with('supplier'));
    }

    public function store(Request $request)
    {
      $order = Order::create([
          'id' => $request ->id,
          'Delivery_id' => $request->delivery_id,
          'order_detail_id' => $request->order_detail_id,
          'Delivery_date' => $request ->delivery_date,
          'Headquarters_id' => $request->Headquarters_id,
          'Branch_id' => $request ->Branch_id,
          'product_id' => $request->product_id,
          'product_quantity' => $request->product_quantity,
      ]);
      return new OrderResource($book);
    }

    public function show(Order $order)
    {
      return new OrderResource($order);
    }

    public function update(Request $request, Order $order)
    {
      
      $book->update($request->only(['id', 'product_id','product_quantity']));

      return new OrderResource($order);
    }

    public function destroy(Order $order)
    {
      $order->delete();

      return response()->json(null, 204);
    }
}
