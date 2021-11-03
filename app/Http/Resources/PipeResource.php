<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'item_id' => $this->item_id,
            'qty' => $this->qty,
            'qty_unit' => $this->qty_unit,
            'country_name' => $this->country_name,
            'item_code' => $this->item_code,
            'item_desc' => $this->item_desc,
            'product_type' => $this->product_type,
            'grade' => $this->grade,
            'connection' => $this->connection,
            'size' => $this->size
        ];
    }
}
