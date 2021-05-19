<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
     
    public function show($id)
    {
        //if (\Auth::id() != $id ){
            //return back();
        //}
        
        $user = User::findOrFail($id);
        
        return view('users.show', ['user' => $user] );
    }
    
    
}