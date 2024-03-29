<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{           
       private $clientes=[
            ['id'=>1,'nome'=>'Huayan'],
            ['id'=>2,'nome'=>'Melque'],
            ['id'=>3,'nome'=>'Edna'],
            ['id'=>4,'nome'=>'Eduardo'],
            ['id'=>5,'nome'=>'Raulino'],
            ['id'=>6,'nome'=>'vcnt']

        ];

        public function __construct()
        {
            $clientes = session('clientes');
            if(!isset($clientes))
            session(['clientes'=> $this->clientes]);
        }

    /** =
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
      return view('clientes.index', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = count($clientes)+1;
        
        $dados_cliente = ["id" => $id, "nome" => $request->nome];
        $clientes[]=$dados_cliente;
        session(['clientes'=> $clientes]);
        return redirect()->route('clientes.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session ('clientes');
        $cliente = $clientes [$id - 1];

        return view('clientes.info', compact(['cliente']));
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
    public function update(Request $request, $id)
    {
        //
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
