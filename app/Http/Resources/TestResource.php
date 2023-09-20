<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return self::format($this->resource);
    }

    public static function format(array $data): array
    {
        return collect($data)->groupBy('modul_name')->map(function ($item) {
            return [
                'modul_name' => $item->pluck('modul_name')->first(),
                'features' => $item,
            ];
        })->values()->all();
    }
}
