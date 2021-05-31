<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\http\Request\UserRequest;

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
        
        if ($user->id != Auth::id()) {
            return redirect('/');
        }
            return view('users.edit', ['user' => $user] );
    }
    
    public function postEdit(Request $request, $id)
    {
        
        $user = User::find($id);
        
        if ($user->id != Auth::id()) {
            return redirect('/');
        }
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        //$user=\Auth::user();   
        
        $user->name = $request->name;
        $user->email = $request->email;
        //追加↓
        $user->password = Hash::make($request->password);
        $user->save();
    
        
        return redirect()->route('user.show',$user->id);

    }
}