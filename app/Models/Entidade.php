<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Entidade extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nuit_empresa',
        'nuit_empregado',
        'nome_empregado',
        'num_inss',
        'prov_unid_prod',
        'distrito_unidade_prod',
        'nacionalidade',
        'sexo',
        'ramo_actividade',
        'data_nascimento'
    ];
}