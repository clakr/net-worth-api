<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'description' => $this->description,
            'amount' => $this->amount,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,

            // RELATIONSHIPS
            'category' => new CategoryResource($this->whenLoaded('category'))
        ];
    }
}
