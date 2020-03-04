<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\ModelPaciente;
use App\User;

use Auth;

class PacientesController extends Controller
{
    
    private $objPaciente;
    private $objUser;
    
    public function __construct()
    {
        $this->objPaciente = new ModelPaciente();
        $this->objUser = new User();
    }  
    
    
    public function index()
    {
        $user_id = Auth::id();
        $user = $this->objUser->find($user_id);
        $pacientes = $this->objPaciente->paginate(5);
        return view('dashboard', compact('pacientes', 'user'));
        // dd($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $user = $this->objUser->find($user_id);
        return view('addpaciente', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteRequest $request)
    {
        //Envia p/ o banco requisição feita no /create
        $cadastro = $this->objPaciente->create([
            'name' => $request->name,
            'nasc' => $request->nasc,
            'sexo' => $request->sexo,
        ]);

        if($cadastro){
            return redirect('dashboard');
            // dd($cadastro);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::id();
        $user = $this->objUser->find($user_id);
        $paciente = $this->objPaciente->find($id);
        return view('addpaciente', compact('paciente', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request, $id)
    {
        //Envia p/ o banco requisição realizada no /edit
        $this->objPaciente->where(['id' => $id])->update([
            'name' => $request->name,
            'nasc' => $request->nasc,
            'sexo' => $request->sexo,
        ]);
        
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->objPaciente->destroy($id);
        return ($delete) ? "sim" : "não";
    }
}
