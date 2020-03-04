<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Crypt;
use App\User;

class UserController extends Controller
{

    
    private $objUser;
    
    public function __construct()
    {
        $this->objUser = new User();
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.cadastro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $cadastro = $this->objUser->create([
            'name' => $request->name,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'password' => bcrypt($request->password),
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
        // $decrypt = Crypt::decrypt($this->objUser->password);  

        $user = $this->objUser->find($id);
        // $this->objUser->password = $decrypt;
        return view('perfil', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {

        $this->objUser->where(['id' => $id])->update([
            'name' => $request->name,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'password' => bcrypt($request->password),
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
        $this->objUser->find($id)->delete();
        return redirect('/');
    }
}
