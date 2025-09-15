<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OnlineConsultationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "isRead" => $this->is_read,
            "message" => $this->message,
            "notes" => $this->notes,
            "phone" => $this->phone,
            "dateTime" => Carbon::parse($this->date_time)->format("d-m-Y H:i:s")
        ];
    }
}
