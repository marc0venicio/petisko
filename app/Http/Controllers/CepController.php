<?php

namespace App\Http\Controllers;

use App\Http\Requests\CepRequest;
use Illuminate\Http\Request;
use Canducci\ZipCode\Facades\ZipCode;

class CepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $obj =(object)[
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => '',
            'uf' => ''
        ];

        if(null !== ($request->get('cep'))){
            $cep = $request->get('cep');
            $cep = preg_replace('/[^0-9]/', '', $cep);
            if(preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep)){
                 $zipCodeInfo = ZipCode::find($cep);
                $obj = $zipCodeInfo->getObject();
                //dd($obj->bairro);
            return view('index', compact('obj'));
            } else{
                $obj->cep ='CEP inválido';
            }
           
        }
        return view('index', compact('obj'));  
    }
}