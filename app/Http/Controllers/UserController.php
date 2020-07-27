<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Foto;
class UserController extends Controller
{
 
    public function index()
    {
       $users=User::all();
       return view('users.admin_index',compact('users'));
    }

  
    public function create()
    {
        return view('users.create');
    }

  
    public function store(Request $request)
    {
        $entrada=$request->all();

        if ($archivo=$request->file('ruta_foto')) {
           $nombre=$archivo->getClientOriginalName();
           $archivo->move('images',$nombre);
           $foto=Foto::create(['ruta_foto'=>$nombre]);
           $entrada['ruta_foto']=$foto->id;
        }else{
            User::create($entrada);
        }
        
       /* User::create($request->all());
        return redirect('/admin/users'); */
    }

  
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
