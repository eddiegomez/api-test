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
            'nuit_empresa' => $this->nuit_empresa,
            'nuit_empregado' => $this->nuit_empregado,
            'nome_empregado' => $this->nome_empregado,
            'num_inss' => $this->num_inss,
            'prov_unid_prod' => $this->prov_unid_prod,
            'distrito_unidade_prod' => $this->distrito_unidade_prod,
            'nacionalidade' => $this->nacionalidade,
            'sexo' => $this->sexo,
            'ramo_actividade' => $this->ramo_actividade,
            'data_nascimento' => $this->data_nascimento,
        ];
    }
}