<?php
namespace App\Http\Resources;
   
use Illuminate\Http\Resources\Json\JsonResource;
   
class Entidade extends JsonResource
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
            'nome' => $this->nome,
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}