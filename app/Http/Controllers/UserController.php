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

        if ($archivo=$request->file('foto_id')) {
           $nombre=$archivo->getClientOriginalName();
           $archivo->move('images',$nombre);
           $foto=Foto::create(['ruta_foto'=>$nombre]);
           $entrada['foto_id']=$foto->id;
        }
        $entrada['password']=bcrypt($request->password);
        User::create($entrada);
         return redirect('/admin/users');
    }

  
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $user=User::findOrFail($id); 
        return view('users.edit',compact('user'));
    }

 
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $entrada=$request->all();
        if ($archivo=$request->file('foto_id')) {
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $foto=Foto::create(['ruta_foto'=>$nombre]);
            $entrada['foto_id']=$foto->id;
        }
        $user->update($entrada);
        return redirect('/admin/users');
    }

 
    public function destroy($id)
    {
       $user=User::findOrFail($id);
       $user->delete();
       return redirect('/admin/users');
    }
}
