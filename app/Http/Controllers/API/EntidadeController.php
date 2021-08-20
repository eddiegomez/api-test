<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Entidade;
use Validator;
use DB;
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
        try {
            DB::connection()->getPdo();

            $entidades = DB::select('select * FROM igss.api_inss FETCH NEXT 100 ROWS ONLY');
            $entidades =  response()->json($entidades, 200);
            //$entidades = $this->sendResponse(EntidadeResource::collection($entidades), 'Entidades retrieved successfully.');
            return $entidades;

        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }

}