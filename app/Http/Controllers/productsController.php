<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $items = new Products();
        $items->product_name =$data['product_name'];
        $items->amount =$data['amount'];
        $items->lote =$data['lote'];
        $items->price =$data['price'];
        $items->best_before =$data['best_before'];
        $items->save();
        
        return view('components.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Products::all();
        return view('components.viewProducts',[
             "products" => $products,
             "title"=>"Tienda"
            ]);
    }

     public function returnProducts(Request $request)
    {
        /*
        Recepcion de Pedidos por Ajax
        returno de Peidos

        @param ArrayData filtra valores null o cero
        @param ArrayNum convierte el Array String to Array Int
        */
        if ($request->isJson()) {
           
            $data = $request->all();
            $ArrayData=array_filter($data);
            $ArrayNum=array_map('intval', $ArrayData);
            $products=Products::whereIn('id',$ArrayNum)->get();
            
            return json_encode($products);
            // foreach ($products as $key ) {
            //     echo $key["id"];
            //     echo $key["product_name"];              
            //     echo $key["price"];
            //     echo "<br>";
            //  }
        }else{
            return "False";
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function billing(Request $request)
    {
        return view('components.billing',[
            "title" => "Facturacion"
        ]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
