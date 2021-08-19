<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testes;
use DB;
use App\Http\Resources\Testes as TesteResource;

class TestesController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            $tabelas = DB::select('select * FROM igss.api_inage');
            dd($tabelas);
            //$data = $this->convert_from_latin1_to_utf8_recursively($tabelas);
            //return $data;
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }

    public static function convert_from_latin1_to_utf8_recursively($dat)
   {
      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

         return $dat;
      } else {
         return $dat;
      }
   }
}
