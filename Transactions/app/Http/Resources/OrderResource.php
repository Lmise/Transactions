<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Delivery_id' => $this->delivery_id,
            'order_detail_id' => $this->order_detail_id,
            'Delivery_date' => $this->delivery_date,
            'Headquarters_id' => $this->Headquarters_id,
            'Branch_id' => $this->Branch_id,
            'product_id' => $this->product_id,
            'product_quantity' => $this->product_quantity,
                      ];;
    }
}
