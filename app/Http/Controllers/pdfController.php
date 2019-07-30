<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    private $data;
    private $pdf;


    public function __construct(){
            $this->pdf = $pdf= App::make('dompdf.wrapper');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
            
            
            $data = $request->all();
          
            $this->pdf->loadView('components.factura',[
                "data"=>$data
            ]);   

            return $this->pdf->stream();  
            
                       
            
        
    
    }

    
}
