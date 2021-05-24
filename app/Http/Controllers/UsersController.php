<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    public function getEdit($id)
    {   
        
        $user = User::findOrFail($id);
        
            return view('users.edit', ['user' => $user] );

    }
    
    public function postEdit(Request $request)
    {
        
         $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        $user=\Auth::user();   
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    
        
        return redirect()->route('user.show',auth()->user()->id);

    }
}