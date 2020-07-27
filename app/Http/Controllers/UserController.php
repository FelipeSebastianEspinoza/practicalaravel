<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
 
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
        User::create($request->all());
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
