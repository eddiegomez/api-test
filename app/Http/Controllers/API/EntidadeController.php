<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Entidade;
use Validator;
use App\Http\Resources\Entidade as EntidadeResource;
   
class EntidadeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Entidades";
        $entidade = Entidade::all();
    
        return $this->sendResponse(EntidadeResource::collection($entidade), 'Entidades retrieved successfully.');
    }
}